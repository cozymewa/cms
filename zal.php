<?php

$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

$db = new mysqli("localhost", "root", "", "auth");
$db->query("SELECT * FROM user");

//$d = mysqli_connect("localhost", "root", "", "auth") 
//mysqli_query($d, "SELECT * FROM user");



?>
<form action="zal.php" method="get">
    <label for="emailInput">Email:</label>
    <input type="email" name="email" id="emailInput">
    <label for="passwordInput">Hasło:</label>
    <input type="password" name="password" id="passwordInput">
    <input type="submit" value="Zaloguj">

