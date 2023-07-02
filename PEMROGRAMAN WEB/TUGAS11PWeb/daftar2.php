<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="file.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<center><h1><font color="#191970" face ="algerian">TUGAS 11 Pemrograman WEB | FORM PHP
    </br></h1></font>
    <font face="Time new roman" size="5px" color="#191970"><?php
            date_default_timezone_set('Asia/Jakarta');
            echo date("l, j F Y | H:i:s A");
            echo " WIB";
            ?> 
    </font></center>
    <hr align="center" size="3" color="#191970" ></hr>
	<div class="card"><div class="kotak"><br>
		<font color="white">DAFTAR</font>
	</div>
		<form action="daftar.php" method="post" name="input">
			<br><br>
			
	<label>Nama Lengkap</label><br>
	 <input type="text" name="nama" placeholder="Masukkan Nama"><br>
	 <label>NIM</label><br>
	<input type="number" name="nim" placeholder="Masukkan NIM"><br>
	<label>Jenis Kelamin</label><br>
	<input type="radio" name="kelamin" >laki-laki
	<input type="radio" name="kelamin">Perempuan<br>
	<label>No Handphone \ No WA</label><br>
	<input type="number" name="nohp" placeholder="Masukkan No HP"><br>
	<label>Program Studi</label><br>
	<select name="prodi">
		<option value="TIF">Teknik Informatika</option>
		<option value="TI">Teknik Industri</option>
		<option value="TE">Teknik Elektro</option>
		<option value="TK">Teknik Kimia</option>
		<option value="TP">Teknologi Pangan</option>

	</select><br>
	<label>Email</label><br>
	<input type="email" name="email" placeholder="Masukkan Email"><br>
	<input type="submit" name="DAFTAR" class="btn" value="Balik halaman daftar">

</div>
</form>

<div class="kotak2">

<?php

$namaerr = $nimerr = $nohperr = $emailerr= "";
$nama = $nim = $nohp = $email = "";
if ($_SERVER['REQUEST_METHOD']=="post"){
	if(empty($_POST['nama'])){
		$namaerr = "Nama is Required";
	}
	
}
if (isset($_POST['DAFTAR'])) {
	echo "Selamat Daftar Berhasil";
}
?>
	
</div>

<div class="footer">
        
            <a href="PWeb2023-Tugas11-SKRIP-I-2200018394-MuhammadSyafiqZhalifunnas.php"><button class="btn">HALAMAN UTAMA</button> </a>
            <a href="daftar.php"><button class="btn">DAFTAR</button> </a>

</body>
</html>