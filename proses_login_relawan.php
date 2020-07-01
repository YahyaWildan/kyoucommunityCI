
<?php
    include("config.php");
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT id_relawan, username FROM relawan WHERE email='$email' AND password = '$password'";
    $query = mysqli_query($mysqli, $sql);
    $data = mysqli_fetch_array($query);
    $row = mysqli_num_rows($query);

    session_start();
    $_SESSION['id_relawan']=$data['id_relawan'];
    $_SESSION['username']=$data['username'];
    if($row==1){
        echo"<script>alert('Login Relawan Sukses!!!')</script>";
        echo"<script>top.location='relawan/'</script>";
    }else{
        echo"<script>alert('Login Relawan Gagal!!!')</script>";
        echo"<script>top.location='index.php'</script>";
    }
?>