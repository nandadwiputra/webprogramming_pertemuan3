<?php // filename: form_edit_kontak.php
include ("koneksi.php");

$id = $_GET['id'];


$query = "SELECT * FROM kontak 
		  WHERE id=$id";
$hasil = mysqli_query($db, $query);

$row = mysqli_fetch_assoc($hasil);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Phone Book</title>
</head>
<body>
<h1>Phone Book</h1>
<div id="menu">
	<ul>
		<li><a href="index.php">Kontak</a></li>
		<li><a href="kategori.php">Kategori</a></li>
	</ul>
</div>
<div id="konten">
	<h2>Edit Kontak</h2>
	<form action="proses_edit_kontak.php" method="post">
		Nama:
		<input type="text" value="<?php echo $row['nama'] ?> name="nama" />
		<br />
		Phone:
		<input type="text" value="<?php echo $row['phone'] ?> name="phone" />
		<br />
		Email:
		<input type="text" value="<?php echo $row['email'] ?> name="email" />
		<br />
		Kategori:
		<select name="kategori">
			<option value="value="<?php echo $row['kategori'] ?>"></option>
		</select>
		<br />
		<input type="submit" value="Simpan" />
	</form>
</div>
</body>
</html>