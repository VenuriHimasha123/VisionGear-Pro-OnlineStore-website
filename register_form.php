<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #0d0d0d;
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }

        .register-container {
            background: rgba(30, 30, 30, 0.95);
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0px 10px 30px rgba(255, 204, 0, 0.1);
            text-align: center;
            width: 350px;
            backdrop-filter: blur(10px);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .register-container:hover {
            transform: scale(1.02);
            box-shadow: 0px 15px 40px rgba(255, 204, 0, 0.2);
        }

        h2 {
            margin-bottom: 20px;
            font-size: 1.8rem;
            letter-spacing: 1px;
        }

        .input-box {
            width: 100%;
            margin: 10px 0;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background: #1e1e1e;
            color: #ffffff;
            outline: none;
            transition: all 0.3s ease-in-out;
            font-size: 1rem;
        }

        .input-box:focus {
            background: #252525;
            box-shadow: 0 0 12px rgba(255, 204, 0, 0.5);
            transform: scale(1.02);
        }

        .btn {
            width: 100%;
            padding: 12px;
            margin-top: 15px;
            background: linear-gradient(45deg, #ffcc00, #ff9900);
            color: #121212;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
            font-size: 1rem;
        }

        .btn:hover {
            background: linear-gradient(45deg, #ff9900, #ffcc00);
            transform: scale(1.05);
            box-shadow: 0px 8px 20px rgba(255, 204, 0, 0.4);
        }

        .link {
            display: block;
            margin-top: 15px;
            color: #ffcc00;
            text-decoration: none;
            transition: color 0.3s ease-in-out;
        }

        .link:hover {
            color: #ff9900;
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="register-container">
        <h2>Register</h2>
        <form action="register.php" method="post">
            <input type="text" name="username" class="input-box" placeholder="Username" required>
            <input type="email" name="email" class="input-box" placeholder="Email" required>
            <input type="password" name="password" class="input-box" placeholder="Password" required>
            <button type="submit" class="btn">Register</button>
        </form>
        <a href="login_form.php" class="link">Already have an account? Login</a>
    </div>

</body>
</html>

