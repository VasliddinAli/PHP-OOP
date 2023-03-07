<?php
session_start();
include("header.php");
include('classes.php');
if(!isset($_SESSION['fullname'])){
    header('Location: login.php');
}


echo "<table border=1>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Location</th>
</tr>";
foreach($markets as $data){
    echo "
    <tr>
        <td>".$data['id']."</td>
        <td>".$data['name']."</td>
        <td>".$data['location']."</td>
    </tr>";
}
echo "</table>";

?>