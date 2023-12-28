<!DOCTYPE html>
<html lang="en">
<?php include("config.php");?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: #9FD4D2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }

        .container {
            display: flex;
            height: 98%;
            /* Use 100% height */
            width: 90%;
            margin: auto;
            overflow: hidden;
        }

        .image {
            flex: 1;
            overflow: hidden;
            background: url('rp.jpg') center/cover no-repeat;
            /* Replace 'your-image-url.jpg' with your image URL */
        }

        .registration-container {
            flex: 1;
            background: #1f1f1f;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            overflow: hidden;
            color: #fff;
            padding: 20px;
            height: 100%;
            /* Use 100% height */
        }

        .registration-header {
            background: #171713;
            color: #fff;
            padding: 10px;
            text-align: center;
            font-size: 18px;
            border-bottom: 1px solid #1f1f1f;
        }

        .registration-form {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        label {
            display: block;
            font-size: 18px;
            margin-bottom: 8px;
            color: #ccc;
        }

        input {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border: 1px solid #333;
            border-radius: 6px;
            box-sizing: border-box;
            background-color: rgba(255, 255, 255, 0.1);
            color: #fff;
            transition: background 0.3s ease-in-out, border 0.3s ease-in-out;
        }

        input:focus {
            background-color: rgba(255, 255, 255, 0.2);
            border: 1px solid #fff;
        }

        .submit-btn {
            background: linear-gradient(to right, #ff9800, #ff5722);
            color: #fff;
            padding: 12px 20px;
            font-size: 18px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background 0.3s ease-in-out;
        }

        .submit-btn:hover {
            background: linear-gradient(to right, #ff5722, #ff9800);
        }

        /* Media queries for responsiveness */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .image {
                flex: none;
                height: 300px;
                /* Set a fixed height for the image on smaller screens */
            }

            .registration-container {
                height: auto;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="image"></div>
        <div class="registration-container">
            <div class="registration-header">
                <h1>Register Here !!!</h1>
            </div>
            <div class="registration-form">
                <form method="POST" action="config.php">
                    <div class="form-group">
                        <label for="fullName">Full Name</label>
                        <input type="text" id="fullName" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="contactNumber">Contact Number</label>
                        <input type="tel" id="contactNumber" name="number" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="pwd" required>
                    </div>
                    <div class="form-group">
                        <label for="confirmPassword">Confirm Password</label>
                        <input type="password" id="confirmPassword" name="cpwd" required>
                    </div>
                    <button type="submit" class="submit-btn" name="Submit">Register</button>
                    Already Registered?<a href="login.php" style="color: cyan;">Login</a>
                </form>
            </div>
        </div>
    </div>

</body>

</html>