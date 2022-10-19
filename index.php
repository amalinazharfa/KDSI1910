<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM alumni_tif ORDER BY id ASC");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
<h2>DATA ALUMNI INFORMATIKA</h2>
 
<body>
<a href="add.php">Tambah Data</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>ID</th> <th>NIM</th> <th>NAMA</th> <th>JUDUL SKRIPSI</th> <th>TAHUN MASUK</th> <th>TAHUN LULUS</th> <th>Update</th>
    </tr>
    <?php 

    while($hasil = mysqli_fetch_array($result)) 
	{
		
		echo "<tr>";
		echo "<td>".$hasil['ID']."</td>";
        echo "<td>".$hasil['NIM']."</td>";
        echo "<td>".$hasil['NAMA']."</td>";
        echo "<td>".$hasil['JUDUL_SKRIPSI']."</td>";   
		echo "<td>".$hasil['TAHUN_MASUK']."</td>";
		echo "<td>".$hasil['TAHUN_LULUS']."</td>"; 		
        echo"<td><a href='edit.php?id=$hasil[ID]'>Edit</a> | <a href='delete.php?id=$hasil[ID]'>Delete</a></td></tr>";   
		}
		?>
    </table>
</body>
</html>