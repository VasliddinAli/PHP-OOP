<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <?php
    session_start();
    include("header.php");

    echo '<form action="" method="post">
    <input type="text" name="name" placeholder="Input your name" required>
    <input type="email" name="email" placeholder="Input your email" required>
    <input type="password" name="password" placeholder="Input your password" required>
    <button name="submit" type="submit">Submit</button>
    </form>';

    if (isset($_SESSION['fullname'])) {
        header('Location: index.php');
    } else {
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            if ($email == 'vasliddinali@gmail.com' && $password == 123) {
                $_SESSION["fullname"] = ['name' => $name, 'email' => $email, 'password' => $password];
                header('Location: index.php');
            } else {
                echo "<script>alert('Email or Message error')</script>";
            }
        }
    }
    ?>
</body>
</html>