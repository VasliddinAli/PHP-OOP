<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>

<body>
    <?php
    session_start();
    include("header.php");
    include('classes.php');
    if (!isset($_SESSION['fullname'])) {
        header('Location: login.php');
    }
    echo "<table border=1>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Location</th>
    </tr>";
    foreach ($markets as $data) {
        echo "
    <tr>
        <td>" . $data['id'] . "</td>
        <td>" . $data['name'] . "</td>
        <td>" . $data['location'] . "</td>
    </tr>";
    }
    echo "</table>";
    ?>
</body>

</html>