<?php

if (isset($_POST["submit"])) {
    if ($_POST["username"] == "admin" && $_POST["password"] == "admin") {
        header("Location: admin.php");
        exit;
    } else {
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "poppins", sans-serif;
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
            background: transparent;
            border: 2px solid rgba(255, 255, 255, .2);
            backdrop-filter: blur(20px);
            box-shadow: 0 0 10px rgba(0, 0, 0, .2);
            color: white;
            border-radius: 10px;
            padding: 30px 40px;
        }

        .container:hover {
            box-shadow: 0 0 8px 1px white;
        }

        .container h1 {
            font-size: 35px;
            text-align: center;
            font-family: "Akaya Telivigala", system-ui;
        }

        .container .gambar {
            padding: 25px 0 10px 0;
            text-align: center;
        }

        .container .gambar img {
            width: 130px;
            height: 160px;
            border-radius: 15px;
        }

        p {
            color: red;
            text-align: center;
            font-family: "Akaya Telivigala", system-ui;
            font-size: 19px;
            font-weight: 700;
            padding-top: 13px;
        }

        .container .input-box {
            position: relative;
            width: 100%;
            height: 50px;
            margin: 30px 0;
        }

        .input-box input {
            width: 100%;
            height: 100%;
            backdrop-filter: blur(5px);
            background-color: transparent;
            outline: none;
            border: 2px solid rgba(255, 255, 255, .2);
            border-radius: 40px;
            font-size: 16px;
            color: white;
            padding: 20px 45px 20px 20px;
        }

        .input-box input::placeholder {
            color: #fff;
        }

        .input-box i {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 20px;
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
            color: #fff;
        }

        .container button:hover {
            background-color: #ff4d00;
            border: none;
            color: #fff;
            box-shadow: 0 0 5px 1px white;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <h1>Login Admin</h1>

            <div class="gambar">
                <img src="logo.jpg" alt="logo">
            </div>

            <?php if (isset($error)) : ?>
                <p>username / password anda salah <?= $_POST["username"]; ?></p>
            <?php endif; ?>

            <div class="input-box">
                <input type="text" placeholder="Username" name="username" id="username">
                <i class='bx bxs-user'></i>
            </div>

            <div class="input-box">
                <input type="password" placeholder="password" name="password" id="password">
                <i class='bx bxs-lock-alt'></i>
            </div>

            <button type="submit" name="submit"> Login </button>
        </form>
    </div>

    <?php ?>
</body>

</html>