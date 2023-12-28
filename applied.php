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
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Applied to</th>
                        <th scope="col">Job Profile</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $server = 'localhost';
                    $username = 'root';
                    $password = '';
                    $database = 'hop2job';

                    $conn = mysqli_connect($server, $username, $password, $database);

                    if ($conn->connect_error) {
                        die("Connection Failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT `name`,`cmpny`, `prof` FROM `applied` WHERE 1";
                    $result = mysqli_query($conn, $sql);
                    $i = 0;
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "
                        <tr><td>" . ++$i . "</td>
                        <td>" . $row['name'] . "</td>
                        <td>" . $row['cmpny'] . "</td>
                        <td>" . $row['prof'] . "</td>
                        </tr>";
                        } {
                        }
                    }

                    ?>
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