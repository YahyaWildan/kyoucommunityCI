
<?php
    include("../config.php");
    session_start();
    $id_relawan = $_SESSION['id_relawan'];
    $id_relawan_acara=$_GET['id_relawan_acara'];


    $sql = "DELETE FROM relawan_acara WHERE id_relawan_acara = '$id_relawan_acara'";
    $query = mysqli_query($mysqli, $sql);
    if($query){
        echo"<script>alert('Hapus Acara Sukses!!!')</script>";
        echo"<script>top.location='acara.php?id_relawan=".$id_relawan."'</script>";
    }else{
        echo"<script>alert('Hapus Acara Gagal!!!')</script>";
        echo"<script>top.location='acara.php?id_relawan=".$id_relawan."'</script>";
    }
?>