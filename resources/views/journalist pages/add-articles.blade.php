@extends('/layouts.app2')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>

        <style>
        .card {
             box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        }

        .form-group {
            margin-bottom: 20px;
        }

        #imagePreview {
            margin-top: 15px;
            display: block;
            max-width: 100%;
            height: auto;
        }
    </style>

    <title>Add Aticles</title>
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
            <h5  style="color: black">Add Article</h5>
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

        <div class="container mt-3">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <form id="articleForm" enctype="multipart/form-data">

                                <div class="form-group mb-3">
                                    <label for="articleTitle">Article Title</label>
                                    <input type="text" class="form-control" id="articleTitle" placeholder="Enter article title">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="imageInput">Choose a picture</label>
                                    <input type="file" class="form-control-file" id="imageInput" onchange="previewImage();">
                                    <img id="imagePreview" src="#" alt="Image Preview" style="display:none; max-width: 200px; max-height: 200px; margin-top: 10px;" />
                                </div>

                                <div class="form-group mb-3">
                                    <label for="shortDescription">Add Short Description</label>
                                    <input type="text" class="form-control" id="shortDescription" placeholder="Enter short description">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="fullDescription">Enter Full Description</label>
                                    <textarea class="form-control" id="fullDescription" rows="5" placeholder="Enter full description"></textarea>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="readingTime">Estimated Reading Time (minutes)</label>
                                    <input type="text" class="form-control" id="readingTime" readonly>
                                </div>



                                <div class="form-group mb-3">
                                    <label for="category">Select Category</label>
                                    <select class="form-control" id="category" name="category">
                                        <option value="Politics">Politics</option>
                                        <option value="Health">Health</option>
                                        <option value="Technology">Technology</option>
                                        <option value="Foods">Foods</option>
                                        <option value="Education">Education</option>
                                        <option value="Entertainment">Entertainment</option>
                                        <option value="Travel">Travel</option>
                                        <option value="Science">Science</option>
                                        <option value="Lifestyle">Lifestyle</option>
                                        <option value="Sports">Sports</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
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

   

<script>
function previewImage() {
    var preview = document.getElementById('imagePreview');
    var fileInput = document.getElementById('imageInput');
    var file = fileInput.files[0];
    var reader = new FileReader();

    reader.onloadend = function () {
        preview.src = reader.result;
        preview.style.display = 'block';
    }

    if (file) {
        reader.readAsDataURL(file);
        truncateFileName(fileInput);
    } else {
        preview.src = "";
        preview.style.display = 'none';
    }
}

function truncateFileName(input) {
    var fileName = input.files[0].name;
    var maxFileNameLength = Math.floor(input.offsetWidth / 10); // Assuming average character width
    if (fileName.length > maxFileNameLength) {
        var truncatedFileName = fileName.substring(0, maxFileNameLength - 3) + '...';
        input.nextElementSibling.textContent = truncatedFileName;
    } else {
        input.nextElementSibling.textContent = fileName;
    }
}

</script>


<script>
    // Function to estimate reading time based on average words per minute
    function estimateReadingTime() {
        const wordsPerMinute = 200; // Adjust this value based on your content
        const fullDescription = document.getElementById('fullDescription').value;
        const wordCount = fullDescription.split(/\s+/).length;

        const readingTime = Math.ceil(wordCount / wordsPerMinute);

        document.getElementById('readingTime').value = readingTime;
    }

    // Add an event listener to the full description textarea to update reading time
    document.getElementById('fullDescription').addEventListener('input', estimateReadingTime);
</script>
@endsection
</body>

</html>