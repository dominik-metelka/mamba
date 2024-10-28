<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="shortcut icon" href="../favicon/favicon.ico" type="image/x-icon">

    <style>
        body {
            background-color: #1A1A1D;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            color: white;
            position: relative;
        }

        .back-arrow {
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 24px;
            color: white;
            text-decoration: none;
            transition: color 0.3s;
        }

        .back-arrow:hover {
            color: #ccc;
        }

        .register-container {
            background-color: #282A36;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
            width: 300px;
            text-align: center;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"] {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #444;
            border-radius: 4px;
            background-color: #444;
            color: white;
            text-align: left;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: rgb(175, 148, 117);
            border: none;
            border-radius: 4px;
            color: white;
            cursor: pointer;
            font-size: 16px;
            margin-top: 15px;
        }

        input[type="submit"]:hover {
            background-color: rgb(195, 168, 137);
        }

        .register-link {
            text-decoration: none;
            color: rgb(175, 148, 117);
            font-weight: bold;
        }
    </style>
</head>

<body>
    <!-- Šípka späť na domovskú stránku -->
    <a href="../../index.php" class="back-arrow">&#8592;</a>

    <div class="register-container">
        <h2>Register</h2>
        <input type="text" placeholder="Username" required>
        <input type="email" placeholder="Email" required>
        <input type="password" placeholder="New Password" required>
        <input type="password" placeholder="Repeat Password" required>
        <input type="submit" value="Register">
        <p>Already have an account? <a href="login.php" class="register-link">Login</a></p>
    </div>
</body>

</html>