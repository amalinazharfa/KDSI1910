<html>
<head>
    <title>Add Users</title>
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>NIM</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr> 
                <td>NAMA</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>JUDUL SKRIPSI</td>
                <td><input type="text" name="judul_skripsi"></td>
            </tr>
            <tr> 
				<td>TAHUN MASUK</td>
                <td><input type="text" name="tahun_masuk"></td>
			</tr>
			<tr>
				<td>TAHUN LULUS</td>
                <td><input type="text" name="tahun_lulus"></td>
			</tr>
			<tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $judul_skripsi = $_POST['judul_skripsi'];
		$tahun_masuk = $_POST['tahun_masuk'];
		$tahun_lulus = $_POST['tahun_lulus'];
        
        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO alumni_tif(nim, nama, judul_skripsi, tahun_masuk, tahun_lulus) VALUES('$nim','$nama','$judul_skripsi','$tahun_masuk','$tahun_lulus')");
        
        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>