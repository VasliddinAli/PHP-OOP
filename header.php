<?php
if(isset($_SESSION['fullname'])){
    echo '<header>
    <a href="index.php">Home</a>  | 
    <a href="category.php">Category</a> | 
    <a href="products.php">Products</a> |
    <a href="logout.php">LogOut</a>';
    echo '</header><br><hr>';
}
else{
    echo "Please enter your information. <br><br>";
}
?>