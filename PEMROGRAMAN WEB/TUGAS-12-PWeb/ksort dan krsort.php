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
$arrNilai = array ("Rudi"=>90,"Ilham"=>75,"Indra"=>100,"Fatur"=>65,"Syafiq"=>87);
echo "<b>Array Sebelum diurutkan</b>";
echo "<pre>";
print_r ($arrNilai);
echo "<pre>";

ksort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah diurutkan dengan ksort()</b>";
echo "<pre>";
print_r ($arrNilai);
echo "</pre>";

ksort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah diurutkan dengan krsort()</b>";
echo "<pre>";
print_r ($arrNilai);
echo "<pre>";
?>
<br>
    </div>


    
    
    


    <div class="footer">
        
            <a href="PWeb2023-Tugas12-SKRIP-I-2200018394-MuhammadSyafiqZhalifunnas.php"><button class="btn">HALAMAN UTAMA</button> </a>

</br>
</body>
