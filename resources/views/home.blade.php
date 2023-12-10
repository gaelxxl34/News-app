@extends('layouts.app')

@section('content')
<script>
  window.onload = function() {
    firebase.auth().onAuthStateChanged(function(user) {
      if (user) {
        // User is signed in, display their email
        const userEmail = user.email;
        document.getElementById('userEmail').innerText = 'Logged in as: ' + userEmail;
      } else {
        // No user is signed in, handle accordingly
      }
    });
  };
</script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <p id="userEmail"></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
