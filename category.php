<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
</head>

<body>
    <?php
    session_start();
    include("header.php");
    include('classes.php');
    if (!isset($_SESSION['fullname'])) header('Location: login.php');
    echo "<table border=1>
    <tr>
        <th>ID</th>
        <th>Name</th>
    </tr>";
    foreach ($categories as $data) {
        echo "
        <tr>
            <td>" . $data['id'] . "</td>
            <td>" . $data['name'] . "</td>
        </tr>";
    }
    echo "</table>";
    ?>
</body>

</html>