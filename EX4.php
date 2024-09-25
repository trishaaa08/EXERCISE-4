<form action="your-php-file.php" method="get">
    <input type="text" username="username" placeholder="Username">
    <input type="submit" value="Submit">
</form>

<form action="your-php-file.php" method="post">
    <input type="text" name="name" placeholder="Name">
    <input type="submit" value="Submit">
</form>


<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $username = $_GET["username"];
    
} 

else if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    
}
?>