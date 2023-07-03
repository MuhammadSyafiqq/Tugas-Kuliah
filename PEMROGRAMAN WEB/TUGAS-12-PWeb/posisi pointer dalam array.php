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
$transport=array('Jalan kaki','Bus','Mobil','Pesawat');
echo "<pre>";
print_r ($transport);
echo "<pre>";
$mode = current($transport);
echo $mode. "<br>";
$mode = next($transport);
echo $mode. "<br>";
$mode = current($transport);
echo $mode. "<br>";
$mode = prev($transport);
echo $mode. "<br>";
$mode = end($transport);
echo $mode. "<br>";
$mode = current($transport);
echo $mode. "<br>";
?>
<br>
    </div>


    
    
    


    <div class="footer">
        
            <a href="PWeb2023-Tugas12-SKRIP-I-2200018394-MuhammadSyafiqZhalifunnas.php"><button class="btn">HALAMAN UTAMA</button> </a>

</br>
</body>



