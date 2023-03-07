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
        if($email == 'vasliddinali@gmail.com' && $password == 123){
            $_SESSION["fullname"] = ['name' => $name, 'email' => $email, 'password' => $password];
            header('Location: index.php');
        }else{
            echo "<script>alert('Email or Message error')</script>";
        }
    }
}
?>