<?php

$namaerr = $nimerr = $nohperr = $emailerr =$kelaminerr= $prodierr = "";
$nama = $nim = $nohp = $email = $kelamin = $prodi = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	if(empty(trim($_POST['nama']))){
		$namaerr = "Nama harus diisi";
	}
	else{
		$nama = $_POST['nama'];
		}
	if(empty(trim($_POST['nim']))){
		$nimerr = "NIM Harus diisi";

	}
	else{
		$nim = $_POST['nim'];
	}

	if(empty(trim($_POST['nohp']))){
		$nohperr = "Nomor hp harus diisi";
	}
	else{
		$nohp = $_POST['nohp'];
	}
	if(empty(trim($_POST['prodi']))){
		$prodierr = "Prodi Harus diisi";
	}
	else{
		$prodi = $_POST['prodi'];
	}
	if (empty(trim($_POST['email']))){
		$emailerr = "email harus diisi";
	}
	else{
		$email = $_POST['email'];
	}
}
	

?>

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
 
	<div class="card"><div class="kotak">
    	<font color="white"><br>Daftar</font>
    </div>

	<form action="<?php echo $_SERVER['PHP_SELF'];?>"  method="post">
	<br><br>

	<label>Nama Lengkap</label><br>
	 <input type="text" name="nama" placeholder="Masukkan Nama" value="<?php echo $nama;?>">
	 <font color="red">*
	 <span><?php echo $namaerr; ?></span></font>
	 <br>
	 <label>NIM</label><br>
	<input type="number" name="nim" placeholder="Masukkan NIM" value="<?php echo $nim;?>">
	<font color="red">*
	 <span><?php echo $nimerr; ?></span></font>
	 <br>
	<label>Jenis Kelamin :</label><br>
	<input type="radio" name="kelamin" >laki-laki
	<input type="radio" name="kelamin">Perempuan<font color="red">*</font> <br>
	<label>No Handphone \ No WA</label><br>
	<input type="number" name="nohp" placeholder="Masukkan No HP" value="<?php echo $nohp;?>">
		<font color="red">*
	 <span><?php echo $nohperr; ?></span></font>
	 <br>
	<label>Program Studi</label><br>
	<select name="prodi" oninvalid="Prodi Wajib Diiisi">
		<option value="TIF">Teknik Informatika</option>
		<option value="TI">Teknik Industri</option>
		<option value="TE">Teknik Elektro</option>
		<option value="TK">Teknik Kimia</option>
		<option value="TP">Teknologi Pangan</option>

	</select><br>
	<label>Email</label><br>
	<input type="email" name="email" placeholder="Masukkan Email" value="<?php echo $email;?>">
	<font color="red">*
	 <span><?php echo $emailerr; ?></span></font>
	 <br>
	<input type="submit" name="DAFTAR" class="btn" value="DAFTAR">

</div>
</form>
</div>


<div class=""></div>
	<div class="footer">
        
            <a href="PWeb2023-Tugas11-SKRIP-I-2200018394-MuhammadSyafiqZhalifunnas.php"><button class="btn">HALAMAN UTAMA</button> </a>
            <a href="daftar.php"><button class="btn">DAFTAR</button> </a>
</body>
</html>