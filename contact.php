<?php include 'config.php' ?>
<!-- Page content -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            background: #9FD4D2;
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
            /* margin-top: 44px; */
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
            margin-top: 78px;
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

        .container {
            max-width: 1200px;
            margin: 20px auto;
            display: flex;
            justify-content: space-between;
        }

        .box {
            flex: 1;
            padding: 20px;
            box-sizing: border-box;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            margin: 10px;
        }

        .left-column {
            background-color: #c0aec2;
            border: 20px solid #453047;
        }

        .right-column {
            background-color: #c8d3e6;
            border: 28px solid #28364d;
        }

        .message {
            font-size: 18px;
            line-height: 1.6;
        }

        #email-input {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        #submit-button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            box-sizing: border-box;
            border: none;
            border-radius: 4px;
            background-color: #28364d;
            color: white;
            cursor: pointer;
            font-size: 16px;
        }

        #submit-button:hover {
            background-color: black;
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
        <div class="sidebar">
            <a class="sidebar-link" href="career.php">Jobs</a>
            <a class="sidebar-link" href="jobs.php">Candidates</a>
            <a class="sidebar-link" href="applied.php">Applied Candidates</a>
            <a class="sidebar-link" href="contact.php">Contact</a>
            <!-- <a class="sidebar-link" href="#about">About</a> -->
        </div>
        <div class="content">
            <div class="container">
                <div class="box right-column">
                    <div class="message">
                        <p>Why Choose Us?</p>
                        <ul>
                            <li>Expertise in giving optimized solutions tailored to your needs.</li>
                            <li>Proven track record of successful project deliveries.</li>
                            <li>Dedicated team ready to assist you at every step.</li>
                            <li>Cutting-edge technologies for a seamless user experience.</li>
                        </ul>
                    </div>
                    <form method="POST">
                        <label for="email-input">Reach out to us by giving your email address, and we will assign you
                            the best person:</label>
                        <input type="email" id="email-input" name="email" placeholder="Your Email Address" required>
                        <button type="submit" id="submit-button" name="cont">Submit</button>
                    </form>
                </div>
                <div class="box left-column">
                    <h1 style="text-align:center;"><b>Why should I book a call and what happens next?</b></h1><br><br>
                    <p style="text-align:justify;color:white;">We aren't going to spam you with emails or call you a thousand times. After you book a call,
                        we'll ask you a few questions about what you're looking to accomplish, send you a confirmation
                        and a few resources to review before your meeting.</p>
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