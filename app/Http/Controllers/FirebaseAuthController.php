<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Exception\Auth\UserNotFound;
use Kreait\Laravel\Firebase\Facades\Firebase;
use Kreait\Firebase\Exception\Auth\FailedToVerifyToken;

class FirebaseAuthController extends Controller
{
    protected $auth;

    public function __construct()
    {
        $this->auth = Firebase::auth();
    }


     // Added showLoginForm method
     public function showLoginForm()
     {
         return view('login'); // Ensure this matches the name of your Blade template
     }

     // Added showRegistrationForm method
     public function showRegistrationForm()
     {
         return view('register'); // Ensure this matches the name of your Blade template
     }
     // Added showForgetPasswordForm method
     public function showForgetPasswordForm()
     {
         return view('forget-password'); // Ensure this matches your Blade template name
     }

     public function Home()
     {
         return view('home'); 
     }


     public function adminDashboard()
     {
         return view('admin_dashboard');
     }


     public function journalistDashboard()
     {
         return view('journalist_dashboard'); 
     }



public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    try {
        $signInResult = $this->auth->signInWithEmailAndPassword($request->email, $request->password);
        $uid = $signInResult->firebaseUserId();

        // Retrieve user role from Firestore
        $firestore = app('firebase.firestore');
        $database = $firestore->database();
        $userDoc = $database->collection('Users')->document($uid)->snapshot();

        if ($userDoc->exists()) {
            $userData = $userDoc->data();
            $userRole = $userData['role'] ?? null;

            // Start session with user data
            session(['user_email' => $request->email, 'user_role' => $userRole]);

            // Redirect based on user role
            if ($userRole === 'admin') {
                return redirect('admin_dashboard');
            } elseif ($userRole === 'journalist') {
                return redirect('journalist_dashboard');
            } elseif ($userRole === 'user') {
                return redirect('home');
            } else {
                return redirect('welcome');
            }
        }

        return redirect('welcome');
    } catch (\Throwable $e) {
        return back()->withErrors(['login_error' => 'Invalid email or password.']);
    }
}




     public function register(Request $request)
     {
         $request->validate([
             'email' => 'required|email',
             'password' => 'required|min:6',
         ]);

         try {
             $userProperties = [
                 'email' => $request->email,
                 'emailVerified' => false,
                 'password' => $request->password,
                 'disabled' => false,
             ];
             $createdUser = $this->auth->createUser($userProperties);

             // Add user data to Firestore
             $firestore = app('firebase.firestore');
             $database = $firestore->database();
             $usersRef = $database->collection('Users');
             $usersRef->document($createdUser->uid)->set([
                 'email' => $request->email,
                 'role' => 'user'
             ]);

             // Start session after successful Firestore entry
             session(['user_email' => $request->email]);
             return redirect('home'); // Redirect to the home page
         } catch (\Throwable $e) {
             return back()->withErrors(['error' => $e->getMessage()]);
         }
     }





    public function sendPasswordResetLink(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        try {
            // Check if user exists in Firebase
            $user = $this->auth->getUserByEmail($request->email);

            // If the user exists, send the password reset link
            $this->auth->sendPasswordResetLink($request->email);

            return back()->with('status', 'Password reset link sent to your email.');
        } catch (UserNotFound $e) {
            // User not found in Firebase
            return back()->with('error', 'No user found with this email address.');
        } catch (\Throwable $e) {
            // Other errors
            return back()->with('error', 'Unable to send password reset link.');
        }
    }




    public function logout(Request $request)
    {
        // Retrieve the UID from the session
        $uid = session('uid'); 

        if ($uid) {
            $this->auth->revokeRefreshTokens($uid);
            session()->flush(); // Clear the session
            return redirect('/'); // Redirect to the welcome page
        } else {
            return redirect('/')->withErrors(['error' => 'No active session found']);
        }
    }

}