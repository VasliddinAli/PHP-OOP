<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>

<body>
    <?php
    session_start();
    include("header.php");
    include('classes.php');
    if (!isset($_SESSION['fullname'])) header('Location: login.php');

    foreach ($markets as $market) {
        echo "<h2>" . $market['name'] . "</h2>";
        if ($market['market_products'] != null) {
            echo "<table border=1>
            <tr>
                <th>ID</th>
                <th>Category_name</th>
                <th>Name</th>
                <th>Color</th>
                <th>Price</th>
            </tr>";
            foreach ($market['market_products'] as $product) {
                echo "
            <tr>
                <td>" . $product['id'] . "</td>
                <td>" . $product['category_name'] . "</td>
                <td>" . $product['name'] . "</td>
                <td>" . $product['color'] . "</td>
                <td>" . $product['price'] . "</td>
            </tr>";
            }
            echo "</table>";
        } else {
            echo "Data is not defined in " . $market['name'] . " :(";
        }
    }
    ?>
</body>
</html>