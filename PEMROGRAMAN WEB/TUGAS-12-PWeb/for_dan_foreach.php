<html>
<head>
    <title>
        TUGAS11PWeb | FORM PHP</title>
        <link rel="stylesheet" type="text/css" href="file2.css">
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

    <div class="card"><div class="kotak"></br>
        <font color="white">TUGAS12 | PEMROGRAM WEB</div></font>
    </br></br></br>
    <?php
$arrWarna = array("Red","Orange","Yellow","Green","Blue","Purple");

echo "Menampilkan isi array dengan for : <br>";
for($i = 0;$i < count($arrWarna);$i++){
	echo "Warna pelangi <font color=$arrWarna[$i]> ". $arrWarna[$i]. "</font><br>";
}

echo "<br>Menampilkan isi array dengan FOREACH:<br>";
foreach ($arrWarna as $warna) {
	echo "Warna Pelangi <font color=$warna>". $warna."<font><br>";
}
?>
<br>
    </div>


    
    
    


    <div class="footer">
        
            <a href="PWeb2023-Tugas12-SKRIP-I-2200018394-MuhammadSyafiqZhalifunnas.php"><button class="btn">HALAMAN UTAMA</button> </a>

</br>
</body>





