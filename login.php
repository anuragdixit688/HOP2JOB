<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

        .login-container {
            flex: 1;
            background: #1f1f1f;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            overflow: hidden;
            color: #ecf0f1;
            padding: 20px;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .login-header {
            color: #ecf0f1;
            padding: 10px;
            text-align: center;
            font-size: 18px;
            border-bottom: 1px solid #34495e;
        }

        .login-form {
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
            color: #bdc3c7;
        }

        input {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border: 1px solid #95a5a6;
            border-radius: 6px;
            box-sizing: border-box;
            background-color: rgba(255, 255, 255, 0.1);
            color: #ecf0f1;
            transition: background 0.3s ease-in-out, border 0.3s ease-in-out;
        }

        input:focus {
            background-color: rgba(255, 255, 255, 0.2);
            border: 1px solid #ecf0f1;
        }

        .submit-btn {
            background: linear-gradient(to right, #e67e22, #d35400);
            color: #ecf0f1;
            padding: 12px 20px;
            font-size: 18px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background 0.3s ease-in-out;
        }

        .submit-btn:hover {
            background: linear-gradient(to right, #d35400, #e67e22);
        }

        .switch-form {
            text-align: center;
            margin-top: 20px;
            color: #bdc3c7;
        }

        .switch-form a {
            color: #3498db;
            text-decoration: none;
        }

        .switch-form a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="image"></div>
        <div class="login-container">
            <div class="login-header">
                <h1>Login Here !!!</h1>
            </div>
            <div class="login-form">
                <form method="POST" action ="config.php">
                    <div class="form-group">
                        <label for="loginEmail">Email</label>
                        <input type="email" id="loginEmail" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="loginPassword">Password</label>
                        <input type="password" id="loginPassword" name="pwd" required>
                    </div>
                    <button type="submit" class="submit-btn" name="login">Login</button>
                    <div class="switch-form">
                        New User? <br>Create Your Account  <a href="register.php" style="text-decoration:underline;color: cyan;">Sign Up</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
