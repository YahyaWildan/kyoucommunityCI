
<?php
    include("../config.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard relawan</title>
</head>
<body>
    <center>
        <hr>
            <a href="../relawan">Dashboard</a> |
            <a href="profile.php?id_relawan=<?php echo $_SESSION['id_relawan'];?>">Profile</a> |
            <a href="acara.php?id_relawan=<?php echo $_SESSION['id_relawan'];?>">Acara</a> |
            <a href="logout.php">Logout</a>
        <hr>
    </center>
    <h3>Selamat Datang pahlawan relawan <?php echo $_SESSION['username'];?> </h3>
</body>
</html>