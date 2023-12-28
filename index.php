<?php include 'config.php' ?>
<!-- Page content -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Dashboard</title>
    <style>
        body {
            margin: 0;
            font-family: "Lato", sans-serif;
            background: black;
        }

        .navbar {
            overflow: hidden;
            background-color: #333;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            /* Ensure navbar is above sidebar */
        }

        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar-brand {
            color: orange;
            border: dotted;
            padding: 8px 16px;
        }

        .navbar a:hover {
            background-color: #52504f;
            color: black;
        }

        .sidebar {
            margin-top: 44px;
            /* Adjusted margin to accommodate the navbar height */
            /* margin-top: 74px; */
            padding: 0;
            width: 200px;
            background-color: #454343;
            position: fixed;
            height: 100%;
            overflow: auto;
            z-index: 1;
            /* Ensure sidebar is behind navbar */
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 16px;
            text-decoration: none;
        }

        .sidebar a.active {
            background-color: #04AA6D;
            color: white;
        }

        .sidebar a:hover:not(.active) {
            background-color: #555;
            color: white;
        }

        .content {
            margin-top: 30px;
            margin-left: 200px;
            padding: 1px 16px;
            height: 1000px;
        }

        @media screen and (max-width: 700px) {
            .navbar a {
                float: none;
                display: block;
                text-align: left;
            }

            .sidebar {
                width: 100%;
                height: auto;
                margin-top: 0;
            }

            .content {
                margin-left: 0;
            }
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input,
        textarea,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            padding: 10px;
            background-color: #4caf50;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #d3d3d3;
        }

        .non-clickable {
            pointer-events: none;
        }

        .carousel-inner {
            height: 40vh;
            object-fit: cover;
            overflow: hidden;
        }

        .carousel-item img {
            object-fit: cover;
            /* Ensure images maintain aspect ratio and cover the container */
            height: 100%;
            /* Set the height of the image to 100% within the container */
            width: 100%;
            /* Set the width of the image to 100% within the container */
        }

        .carousel-caption {
            object-fit: cover;
        }
    </style>
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand non-clickable" href="#">HOP 2 JOB</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        <a class="nav-link" href="career.php">Career</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner carousel-image">
                <div class="carousel-item active">
                    <img src="c1.jpg" class="d-block" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="c2.jpg" class="d-block" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="c3.jpg" class="d-block" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="main-section">
        <div class="box">
            <div class="box-img">
                <img src="a1.jpg" alt="Load image" width="100%" height="100%" />
            </div>
            <div class="box-cont">
                <h2>EXPLORE</h2>
                <p>
                    Explore the job culture around your domain so that you stay updated according to the requirements
                    like which domain is in more demand and what are the basic requirements a company is asking in the
                    respective time. Thus, exploring gives you information.
                </p>
            </div>
        </div>
        <div class="box">
            <div class="box-img">
                <img src="a2.jpg" alt="Load image" width="100%" height="100%" />
            </div>
            <div class="box-cont">
                <h2>LEARN</h2>
                <p>
                    Learn about the job opportunities in your respective domain and apply accordingly. Learn how things
                    are changing and what things are needed for getting employed or to work for something. Also, apart
                    from this an individual can also learn his/her limitations.
                </p>
            </div>
        </div>
        <div class="box">
            <div class="box-img">
                <img src="a3.jpg" alt="Load image" width="100%" height="100%" />
            </div>
            <div class="box-cont">
                <h2>PREPARE</h2>
                <p>
                    Prepare yourself to work in your favourite choice out of al the choices present in the bank of jobs.
                    You can learn the skills in between so that you can apply for a certain job and do the rest of
                    preparation accordingly when you are looking for a job and willing to learn something new.
                </p>
            </div>
        </div>
    </div>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var sidebarLinks = document.querySelectorAll('.sidebar-link');

            sidebarLinks.forEach(function (link) {
                link.addEventListener('click', function () {
                    // Remove active class from all links
                    sidebarLinks.forEach(function (otherLink) {
                        otherLink.classList.remove('active');
                    });

                    // Add active class to the clicked link
                    link.classList.add('active');
                });
            });
        });
    </script>

</body>

</html>