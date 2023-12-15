@extends('layouts.app3')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="Searchs">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">   

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets\css\style.css" rel="stylesheet">
    <style>
        p{
            font-size: 13px;
        }
        .large-margin-bottom {
            margin-bottom: 80px; /* Adjust this value as needed */
        }

    </style>
</head>

<body>
@section('content')




    <div class="container-fluid">
    <div class="row">
        <!-- Left Column for Latest News -->
        <div class="col-md-4 border-right pl-md-5 ">
            <h4 class="mb-3">Latest stories</h4>
            <div class="latest-news mb-5" >
            <!-- News Item 1 -->
            <div class="d-flex mb-3">
                <img src="assets/img/news-500x280-1.jpg" class="mr-3" style="width: 100px; height: 100px; object-fit: cover;">
                <div>
                    <h6>Beleaguered pharmacies chart a risky transformation</h6>
                    <p>21 mins ago - Health</p>
                </div>
            </div>

            <!-- News Item 2 -->
            <div class="d-flex mb-3">
                <img src="assets/img/news-500x280-2.jpg" class="mr-3" style="width: 100px; height: auto; object-fit: cover;">
                <div>
                    <h6>A record share of U.S. homes are mortgage-free</h6>
                    <p>51 mins ago - Economy</p>
                </div>
            </div>

            <!-- News Item 3 -->
            <div class="d-flex mb-3">
                <img src="assets/img/news-500x280-3.jpg" class="mr-3" style="width: 100px; height: 100px; object-fit: cover;">
                <div>
                    <h6>Biden's Hunter trigger: Anger, sadness, strained relationships</h6>
                    <p>51 mins ago - Politics & Policy</p>
                </div>
            </div>
            <!-- Add more latest news items here -->
        </div>

            <h4 class="mb-3">Top 5 Highlights</h4>
            <div class="top-news">
                <div>
                    <h6>GOP locks down votes for Biden impeachment inquiry</h6>
                    <p>2 hours ago - sport</p>
                </div>

                <div>
                    <h6>GOP locks down votes for Biden impeachment inquiry</h6>
                    <p>3 hours ago - sport</p>
                </div>
  

                <!-- Add more top news items here -->
            </div>
        </div>

       <!-- Right Column for Articles -->
        <div class="col-md-8">
            <!-- Single Article -->
            <div class="article  large-margin-bottom">
                <!-- Author Info -->
                <div class="media">
                    <img src="assets/img/user.jpg" class="mr-3 rounded-circle" alt="Author" style="width: 40px;">
                    <div class="media-body">
                        <h6 style="margin-bottom: 0;">Author Name</h6>
                        <p class="text-muted" style="margin-top: 0;">1 hours ago</p>
                    </div>

                </div>

                <!-- Article Title -->
                <h3 class="mt-2">Health care costs The big picture</h3>

                <!-- Article Image -->
                <img src="assets/img/news-700x435-2.jpg" class="img-fluid" alt="Article Image" style="width: 750px; height: auto; object-fit: cover;">



                <!-- Short Description -->
                <h6 class="mt-2">Women pay billions more out of pocket for health care: analysis The so-called “pink tax” on consumer products may extend to women’s health coverage, report’s authors argue.</h6>

                <!-- Read More Link -->
                <p><a href="#" class="text-primary">Go deeper (1 min. read) <span>&rarr;</span></a></p>
            </div>


            <div class="article large-margin-bottom">
                <!-- Author Info -->
                <div class="media">
                    <img src="assets/img/news-100x100-1.jpg" class="mr-3 rounded-circle" alt="Author" style="width: 40px; object-fit: cover;">
                    <div class="media-body">
                        <h6 style="margin-bottom: 0;">Author Name</h6>
                        <p class="text-muted" style="margin-top: 0;">2 hours ago</p>
                    </div>

                </div>

                <!-- Article Title -->
                <h3 class="mt-2">Article Title</h3>

                <!-- Article Image -->
                <img src="assets/img/news-500x280-6.jpg" class="img-fluid" alt="Article Image" style="width: 750px; height: auto; object-fit: cover;">



                <!-- Short Description -->
                <h6 class="mt-2">Women pay billions more out of pocket for health care: analysis The so-called “pink tax” on consumer products may extend to women’s health coverage, report’s authors argue.</h6>

                <!-- Read More Link -->
                <p><a href="#" class="text-primary">Go deeper (3 min. read) <span>&rarr;</span></a></p>
            </div>


            
            <div class="article large-margin-bottom">
                <!-- Author Info -->
                <div class="media">
                    <img src="assets/img/news-100x100-3.jpg" class="mr-3 rounded-circle" alt="Author" style="width: 40px; object-fit: cover;">
                    <div class="media-body">
                        <h6 style="margin-bottom: 0;">Author Name</h6>
                        <p class="text-muted" style="margin-top: 0;">10 hours ago</p>
                    </div>

                </div>

                <!-- Article Title -->
                <h3 class="mt-2">Article Title</h3>

                <!-- Article Image -->
                <img src="assets/img/news-500x280-4.jpg" class="img-fluid" alt="Article Image" style="width: 750px; height: auto; object-fit: cover;">



                <!-- Short Description -->
                <h6 class="mt-2">article description</h6>

                <!-- Read More Link -->
                <p><a href="#" class="text-primary">Go deeper (3 min. read) <span>&rarr;</span></a></p>
            </div>


            
            <div class="article large-margin-bottom">
                <!-- Author Info -->
                <div class="media">
                    <img src="assets/img/news-100x100-4.jpg" class="mr-3 rounded-circle" alt="Author" style="width: 40px; object-fit: cover;">
                    <div class="media-body">
                        <h6 style="margin-bottom: 0;">Author Name</h6>
                        <p class="text-muted" style="margin-top: 0;">15 hours ago</p>
                    </div>

                </div>

                <!-- Article Title -->
                <h3 class="mt-2">Article Title</h3>

                <!-- Article Image -->
                <img src="assets/img/news-500x280-2.jpg" class="img-fluid" alt="Article Image" style="width: 750px; height: auto; object-fit: cover;">



                <!-- Short Description -->
                <h6 class="mt-2">article description</h6>

                <!-- Read More Link -->
                <p><a href="#" class="text-primary">Go deeper (2 min. read) <span>&rarr;</span></a></p>
            </div>
            <!-- Add more articles here -->
        </div>

    </div>
</div>




    <!-- Back to Top -->
    <a href="#" class="btn btn-dark back-to-top"><i class="fa fa-angle-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="assets/lib/easing/easing.min.js"></script>
    <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="assets/mail/jqBootstrapValidation.min.js"></script>
    <script src="assets/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>
    <script>
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