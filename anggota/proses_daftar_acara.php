
<?php
    include("../config.php");
    session_start();
    $id_relawan = $_SESSION['id_relawan'];
    $id_acara = $_POST['acara'];


    $sql = "INSERT INTO relawan_acara (id_relawan,id_acara) VALUES('$id_relawan','$id_acara')";
    $query = mysqli_query($mysqli, $sql);
    if($query){
        echo"<script>alert('Daftar Acara Sukses!!!')</script>";
        echo"<script>top.location='acara.php?id_relawan=".$id_relawan."'</script>";
    }else{
        echo"<script>alert('Daftar Acara Gagal!!!')</script>";
        echo"<script>top.location='acara.php?id_relawan=".$id_relawan."'</script>";
    }
?>