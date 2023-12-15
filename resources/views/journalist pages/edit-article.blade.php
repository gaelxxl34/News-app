@extends('/layouts.app2')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <style>
        /* Custom styles */
        .custom-card {
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>

    <title>Edit Article</title>
</head>

<body>

@section('content')
        <!-- Main Component -->
        <div class="main">

        <nav class="navbar navbar-expand px-2 border-bottom d-flex justify-content-between">
            <!-- Button for sidebar toggle -->
            <button class="btn" type="button">
                <span class="navbar-toggler-icon" style="color: black;"></span>
            </button>
            <h5  style="color: black">Edit Article</h5>
            <!-- User Email and Logout -->
            <div class="d-flex">
                @if(session('user_email'))
                    <div style="display: flex; align-items: center;">
                        <!-- Circle with First Letter of Email -->
                        <div id="emailCircle" style="width: 40px; height: 40px; background-color: #007bff; border-radius: 50%; color: white; text-align: center; line-height: 40px; cursor: pointer; margin-right: 10px;">
                            {{ strtoupper(substr(session('user_email'), 0, 1)) }}
                        </div>

                        <!-- Hidden Full Email and Logout Button -->
                        <div id="userDetails" style="display: none; position: absolute; top: 100%; right: 0; background-color: white; border: 1px solid #ddd; border-radius: 4px; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); padding: 12px; z-index: 1;">
                            <p style="margin: 0;">{{ session('user_email') }}</p>
                            <form method="POST" action="{{ route('logout') }}" style="margin-top: 8px;">
                                @csrf
                                <button type="submit" class="btn btn-primary btn-block">Logout</button>
                            </form>
                        </div>
                    </div>
                @else
                    <p>No user logged in.</p>
                @endif
            </div>
        </nav>

        <main class="content px-3 py-2">

            <div class="container mt-2">
                <div class="d-flex justify-content-center justify-content-lg-start">
        <!-- The 'justify-content-lg-start' class ensures that the card is left-aligned on larger screens -->
        <div class="card custom-card">
            <!-- First Section: Avatar, Name, and Time -->
            <div class="card-header d-flex align-items-center border-0">
                <img src="../assets/img/news-100x100-1.jpg" alt="Journalist Avatar" class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover;">
                <div class="ms-3">
                    <h5 class="mb-0">Journalist Name</h5>
                    <p class="text-muted mb-0">Published on: <span class="fw-bold">June 1, 2023</span></p>
                </div>
            </div>

            <!-- Second Section: Article Picture -->
            <img src="../assets/img/news-500x280-6.jpg" alt="Article Picture" class="card-img-top border-0">

            <!-- Third Section: Description -->
            <div class="card-body">
                <h5 class="card-title">Article Title</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac accumsan turpis. ...</p>
            </div>

            <!-- Fourth Section: Published -->
            <div class="card-footer d-flex justify-content-between align-items-center border-0">
                <button type="button" class="btn btn-sm btn-success">
                    Update <i class="fas fa-check-circle"></i>
                </button>


                <a href="" class="btn btn-sm btn-primary">Delete <i class="fas fa-trash-alt"></i></a>
               
            </div>

        </div>
    </div>
</div>

</main>


        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>


    <script>
        const toggler = document.querySelector(".btn");
        toggler.addEventListener("click",function(){
            document.querySelector("#sidebar").classList.toggle("collapsed");
        });

            // JavaScript to Toggle Email and Logout Button Visibility
    document.getElementById('emailCircle').onclick = function() {
        var userDetails = document.getElementById('userDetails');
        if (userDetails.style.display === 'none') {
            userDetails.style.display = 'block';
        } else {
            userDetails.style.display = 'none';
        }
    }

    </script>

   
@endsection
</body>

</html>