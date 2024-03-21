<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap" rel="stylesheet">

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: url(img.jpg) no-repeat;
            background-size: cover;
            background-position: center;
        }

        .container {
            width: 420px;
            height: 200px;
            background: transparent;
            border: 2px solid rgba(255, 255, 255, .2);
            backdrop-filter: blur(20px);
            box-shadow: 0 0 10px rgba(0, 0, 0, .2);
            color: white;
            border-radius: 10px;
            padding: 30px 40px;
        }

        .container h2 {
            text-align: center;
            font-family: "Akaya Telivigala", system-ui;
        }

        .container:hover {
            box-shadow: 0 0 8px 1px white;
        }

        .container button {
            width: 100%;
            height: 50px;
            font-size: 18px;
            border: 1px dashed #fff;
            border-radius: 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, .1);
            cursor: pointer;
            font-weight: 600;
            background-color: transparent;
            cursor: pointer;
            margin-top: 35px;
        }

        .container button:hover {
            background-color: #ff4d00;
            border: none;
            box-shadow: 0 0 5px 1px white;
        }

        a {
            text-decoration: none;
            color: #fff;
            padding: 14px 136px;
            border-radius: 40px;
        }

        a:hover {
            color: #fff;
            background-color: #ff4d00;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Selamat Datang Admin</h2>
        <button><a href="Login.php">Logout</a></button>
    </div>
</body>

</html>