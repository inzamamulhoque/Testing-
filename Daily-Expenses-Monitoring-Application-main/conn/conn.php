<!--  Author Name: Inzamamul Hoque Shawon
    GigHub Link: https://github.com/inzamamulhoque
    Facebook Link:https://www.facebook.com/inzamamulhoqueshawon.cse
    Linkedin Link: https://www.linkedin.com/in/inzamamul-hoque-shawon
    for any PHP, Laravel, Python, Flutter work contact me at inzamamulhoque.cse@gmail.com 
-->
<?php 

$servername = "localhost";
$username = "root";
$password = "";
$db = "ccbd_expenses";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Failed " . $e->getMessage();
}

?> 
<!--  Author Name: Inzamamul Hoque Shawon
GigHub Link: https://github.com/inzamamulhoque
Facebook Link:https://www.facebook.com/inzamamulhoqueshawon.cse
Linkedin Link: https://www.linkedin.com/in/inzamamul-hoque-shawon
for any PHP, Laravel, Python, Flutter work contact me at inzamamulhoque.cse@gmail.com  
-->