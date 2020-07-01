
<?php
    include("config.php");

    $nama_lengkap = $_POST['nama_lengkap'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $foto = $_POST['foto'];

    $sql = "INSERT INTO relawan(nama_lengkap,username,email,password,tempat_lahir,tanggal_lahir,alamat,no_hp,foto) VALUES('$nama_lengkap','$username','$email','$password','$tempat_lahir','$tanggal_lahir','$alamat','$no_hp','$foto')";
    $query = mysqli_query($mysqli, $sql);
    if($query){
        echo"<script>alert('Daftar Relawan Sukses!!!')</script>";
        echo"<script>top.location='index.php'</script>";
    }else{
        echo"<script>alert('Daftar Relawan Gagal!!!')</script>";
        echo"<script>top.location='index.php'</script>";
    }
?>