<?php
include_once("config.php"); 
if(isset($_POST['update'])) 
{ 
 $id = $_POST['id'];
 $nim = $_POST['nim'];
 $nama = $_POST['nama'];
 $judul_skripsi = $_POST['judul_skripsi'];
 $tahun_masuk = $_POST['tahun_masuk'];
 $tahun_lulus = $_POST['tahun_lulus'];

$result = mysqli_query($mysqli, "UPDATE alumni_tif SET nim='$nim',nama='$nama',judul_skripsi='$judul_skripsi',tahun_masuk='$tahun_masuk',tahun_lulus=$tahun_lulus' WHERE id=$id");

 header("Location: index.php");
}
?>
<?php

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM alumni_tif WHERE id=$id");
while($hasil = mysqli_fetch_array($result))
{
 $id = $hasil ['ID'];
 $nim = $hasil ['NIM'];
 $nama = $hasil['NAMA'];
 $judul_skripsi = $hasil['JUDUL_SKRIPSI'];
 $tahun_masuk = $hasil['TAHUN_MASUK'];
 $tahun_lulus = $hasil['TAHUN_LULUS'];
}
?>
<html>
<head> 
 <title>Edit User Data</title>
</head>
<body>
 <a href="index.php">Home</a>
 <br/><br/>
 <form name="update_user" method="post" action="edit.php">
 <table border="0">
 <tr> 
 <td>NIM</td>
 <td><input type="text" name="nim" value=<?php echo $nim;?>></td>
 </tr>
 <tr> 
 <td>NAMA</td>
 <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
 </tr>
 <tr> 
 <td>JUDUL SKRIPSI</td>
 <td><input type="text" name="judul_skripsi" value=<?php echo $judul_skripsi;?>></td>
 </tr>
 <tr> 
 <td>TAHUN MASUK</td>
 <td><input type="text" name="tahun_masuk" value=<?php echo $tahun_masuk;?>></td>
 </tr>
 <tr> 
 <td>TAHUN LULUS</td>
 <td><input type="text" name="tahun_lulus" value=<?php echo $tahun_lulus;?>></td>
 </tr>
 <tr>
 <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
 <td><input type="submit" name="update" value="Update"></td>