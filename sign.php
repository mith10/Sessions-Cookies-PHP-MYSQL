<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f8fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            max-width: 400px;
            padding: 20px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
            color: #1da1f2;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 5px;
            color: #1da1f2;
        }
        input[type="text"],
        input[type="password"] {
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 16px;
        }
        button {
            padding: 12px 20px;
            border: none;
            border-radius: 20px;
            background-color: #1da1f2;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0e7ae6;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Registration Form</h1>

        <form action="sign.php" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">

            <label for="password">Password:</label>
            <input type="password" name="password" id="password">

            <button type="submit">Register</button>
        </form>
    </div>
    
</body>
</html>
