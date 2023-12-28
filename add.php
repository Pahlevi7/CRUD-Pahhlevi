<html>
<head>
	<title>Add Users</title>
    <style>
  body {
   background-color: lightblue;
  }
</style>
</head>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Kode</td>
				<td><input type="text" name="kode"></td>
			</tr>
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr> 
				<td>Telepon</td>
				<td><input type="text" name="telepon"></td>
			</tr>
            <tr> 
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
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
		$kode = $_POST['kode'];
		$nama = $_POST['nama'];
		$telepon = $_POST['telepon'];
        $alamat = $_POST['alamat'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO users(kode,nama,telepon,alamat) VALUES('$kode','$nama','$telepon','$alamat')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>