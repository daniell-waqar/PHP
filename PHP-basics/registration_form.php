<?php

$username = "root";
$password = "";
try {
$conn = new PDO("mysql:host=localhost;dbname=p200750", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected successfully";

echo '<pre>';


} 

catch(PDOException $e) {
echo "Connection failed: " . $e->getMessage();
die;
}




$park_code      = $_POST['park_code'];
$park_name      = $_POST['park_name'];
$park_city      = $_POST['park_city'];
$park_country   = $_POST['park_country'];


    $conn->query("insert into THEMEPARK
    (park_code,park_name,park_city,park_country) values 
    ('$park_code','$park_name','$park_city','$park_country')" )  ;



echo '<br>';
echo 'Your form has been submitted successfully';
echo '<a href="./form.php">Click here to go back to main page</a>';

?>