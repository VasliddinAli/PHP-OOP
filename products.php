<?php
session_start();
include("header.php");
include('classes.php');
if (!isset($_SESSION['fullname']))header('Location: login.php');

foreach($markets as $market){
    echo "<h2>".$market['name']."</h2>";
    echo "<table border=1>
    <tr>
        <th>ID</th>
        <th>Market_name</th>
        <th>Category_name</th>
        <th>Name</th>
        <th>Color</th>
        <th>Price</th>
    </tr>";
    echo "
    <tr>
        <td>".$market['market_products']['id']."</td>
        <td>".$market['market_products']['market_name']."</td>
        <td>".$market['market_products']['category_name']."</td>
        <td>".$market['market_products']['name']."</td>
        <td>".$market['market_products']['color']."</td>
        <td>".$market['market_products']['price']."</td>
    </tr>";
    echo "</table>";
}
?>
