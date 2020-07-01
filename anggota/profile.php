
<?php
    include("../config.php");
    session_start();
    $id_relawan = $_GET['id_relawan'];
    $data = mysqli_query($mysqli, "SELECT * FROM relawan WHERE id_relawan='$id_relawan'");
    $dr = mysqli_fetch_array($data);
    // var_dump($dr);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile relawan</title>
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

    <h1>Lihat dan Edit Profile Relawan</h1>
    <form action="proses_edit_relawan.php" method="POST" enctype="multipart/form-data">
        <table >
            <tr>
                <td>Id Relawan</td>
                <td>:</td>
                <td><input type="text" name="id_relawan" value="<?php echo $dr['id_relawan'];?>"></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="nama_lengkap" value="<?php echo $dr['nama_lengkap'];?>"></td>
            </tr>
            <tr>
                <td>Username </td>
                <td>:</td>
                <td><input type="text" name="username" value="<?php echo $dr['username'];?>"></td>
            </tr>
            <tr>
                <td>Email </td>
                <td>:</td>
                <td><input type="email" name="email" value="<?php echo $dr['email'];?>" disabled></td>
            </tr>
            <tr>
                <td>Password </td>
                <td>:</td>
                <td><input type="password" name="password" value="<?php echo $dr['password'];?>" disabled></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="tempat_lahir" value="<?php echo $dr['tempat_lahir'];?>"></td>
            </tr>
            <tr>
                <td>Tanggal lahir</td>
                <td>:</td>
                <td><input type="date" name="tanggal_lahir" value="<?php echo $dr['tanggal_lahir'];?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" value="<?php echo $dr['alamat'];?>"></td>
            </tr>
            <tr>
                <td>No hp</td>
                <td>:</td>
                <td><input type="text" name="no_hp" value="<?php echo $dr['no_hp'];?>"></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td>:</td>
                <td><img src="<?php echo $dr['foto'];?>"><br><br><input type="file" name="foto"></td>
                <!-- <td><input type="file" name="foto"></td> -->
            </tr>
            <!-- <tr>
            </tr> -->
            <tr>
                <td><button type="submit" >Edit</button></td>
            </tr>
        </table>
    </form>
</body>
</html>