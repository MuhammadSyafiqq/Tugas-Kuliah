<html>
<head>
    <title>
        TUGAS12PWeb | PHP</title>
        <link rel="stylesheet" type="text/css" href="file2.css">
</head>
<body>
    
<center><h1><font color="#191970" face ="algerian">TUGAS 12 Pemrograman WEB 
    </br></h1></font>
    <font face="Time new roman" size="5px" color="#191970"><?php
            date_default_timezone_set('Asia/Jakarta');
            echo date("l, j F Y | H:i:s A");
            echo " WIB";
            ?> 
    </font></center>
    <hr align="center" size="3" color="#191970" ></hr>

    <div class="card"><div class="kotak"></br>
        <font color="white">TUGAS12 | PEMROGRAM WEB</div></font>
    </br></br></br>
<?php
//fungsi ini dengan return value , & parameter
function cetak_ganjil($awal,$akhir){
	for ($i=$awal; $i < $akhir ; $i++) { 
		if ($i%2==1) {
			echo "$i, ";
		}
	}
}

$a=10;
$b=50;
echo "<b>Bilangan ganjil dari $a sampai $b ,adalah :</b><br>";
cetak_ganjil($a,$b);
?>

<br>
    </div>


    
    

    <div class="footer">
        
            <a href="PWeb2023-Tugas12-SKRIP-I-2200018394-MuhammadSyafiqZhalifunnas.php"><button class="btn">HALAMAN UTAMA</button> </a>

</br>
</body>
