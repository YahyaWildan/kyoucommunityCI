
<?php
    include("../config.php");
    $id_relawan = $_POST['id_relawan'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $username = $_POST['username'];
    // $email = $_POST['email'];
    // $password = $_POST['password'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    // $foto = $_POST['foto'];
    $lokasi_file = $_FILES['foto']['tmp_name'];
    $nama_file=$_FILES['foto']['name'];

    echo $nama_lengkap ." ".$username." ".$lokasi_file ." ".$nama_file." ";

    if(!empty($lokasi_file)){
        $foto= "../img/relawan/".date("y-m-d h-i-sa").$nama_file;
        move_uploaded_file($lokasi_file,$foto);
        $sql = "UPDATE relawan SET nama_lengkap='$nama_lengkap',username='$username',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',alamat='$alamat',no_hp='$no_hp',foto='$foto' WHERE id_relawan='$id_relawan '";
        $query = mysqli_query($mysqli, $sql) or die ("Tidak ada database");
    }else{
        $sql = "UPDATE relawan SET nama_lengkap='$nama_lengkap',username='$username',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',alamat='$alamat',no_hp='$no_hp' WHERE id_relawan='$id_relawan '";
        $query = mysqli_query($mysqli, $sql) or die ("Tidak ada database");
    }

// $sql = "INSERT INTO relawan(nama_lengkap,username,tempat_lahir,tanggal_lahir,alamat,no_hp) VALUES('$nama_lengkap','$username','$tempat_lahir','$tanggal_lahir','$alamat','$no_hp')";
    
    if($query){
        echo"<script>alert('Edit Relawan Sukses!!!')</script>";
        echo"<script>top.location='profile.php?id_relawan=".$id_relawan."'</script>";
    }else{
        echo"<script>alert('Edit Relawan Gagal!!!')</script>";
        echo"<script>top.location='profile.php?id_relawan=".$id_relawan."'</script>";
    }
?>