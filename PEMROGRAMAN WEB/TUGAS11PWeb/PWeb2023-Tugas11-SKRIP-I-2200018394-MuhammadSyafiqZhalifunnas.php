<html>
<head>
    <title>
        TUGAS11PWeb | FORM PHP</title>
        <link rel="stylesheet" type="text/css" href="file.css">
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
        <font color="white">LOGIN</div>
    </br></br></br>
        <form action="loginproses2.php" method="post" name="input">
        <input type="text" name="username" value="username" placeholder="Masukkan Username"><br><br>
        <input type="password" name="password" value="password" placeholder="Masukkan Password" ><br>
        </br></br>
        <input type="submit" name="Login" class="btn" value="Login">
        <input type="reset" class="btn" name="reset" value="Reset">

    </form>
        </form>
    </div>


    
    
    


    <div class="footer">
        
            <a href="PWeb2023-Tugas11-SKRIP-I-2200018394-MuhammadSyafiqZhalifunnas.php"><button class="btn">HALAMAN UTAMA</button> </a>
            <a href="daftar.php"><button class="btn">DAFTAR</button> </a>
</br>
</body>