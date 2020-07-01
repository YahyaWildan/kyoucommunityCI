
<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "Kitabantu";
    $mysqli = mysqli_connect($host,$user,$pass,$db);
    if (!$mysqli) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Database Connected successfully<br>";
    
?>