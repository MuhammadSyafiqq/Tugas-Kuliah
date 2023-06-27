<html>
<head>
    <title>
        TUGAS10PWEB</title>
        <link rel="stylesheet" type="text/css" href="file.css">
</head>
<body>
    
<center><h1><font color="#191970" face ="algerian">TUGAS 10 PWEB | MENGKONVERSI NILAI
    </br></h1></font>
    <font face="Time new roman" size="5px" color="#191970"><?php
            date_default_timezone_set('Asia/Jakarta');
            echo date("l, j F Y | H:i:s A");
            echo " WIB";
            ?> 
    </font></center>
    <hr align="center" size="3" color="#191970" ></hr>

    <div class="card"><div class="kotak"></br>
        <font color="white">INPUT NILAI</div>
    </br></br></br>
        <form action="home2.php" method="GET">
        
        </br></br></br>
        <input type="submit" class="btn" value="ULANG"></form>
        </form>
    </div>
    <div class="kotak2"><center>
    
        
    <?php
        $nilai =$_GET['nilai'];
        if ($nilai >= 80.00 && $nilai <= 100){
            echo "Anda Predikat A IPK 4.00";
        }
        if ($nilai >= 76.25 && $nilai <= 79.99){
            echo "Anda Mendapat Predikat A- Dan IPK 3.67";
        }
        if ($nilai >= 68.75 && $nilai <= 76.24){
            echo "Anda Mendapat Predikat B+ Dan IPK 3.33";
        }
        if ($nilai >= 65.00 && $nilai <= 68.74){
            echo "Anda Mendapat Predikat B Dan IPK 3.00";
        }
        if ($nilai >= 62.50 && $nilai <= 64.99 ){
            echo "Anda Mendapat Predikat B- Dan IPK 2.67";
        }
        if ($nilai >= 57.50 && $nilai <= 62.49){
            echo "Anda Mendapat Predikat C+ Dan IPK 2.33";
        }
        if ($nilai >= 55.00 && $nilai <= 57.49){
            echo "Anda Mendapat Predikat C Dan IPK 2.00";
        }
        if ($nilai >= 51.25 && $nilai <= 54.99){
            echo "Anda Mendapat Predikat C- Dan IPK 1.67";
        }
        if ($nilai >= 43.75 && $nilai <= 51.24){
            echo "Anda Mendapat Predikat D+ Dan IPK 1.33";
        }
        if ($nilai >= 40.00 && $nilai <= 43.74){
            echo "Anda Mendapat Predikat D Dan IPK 1.00";
        }


    ?>
</center></div>
</center>
</center>
</div>


    <div class="footer"> <font color="white" size="5"></body>