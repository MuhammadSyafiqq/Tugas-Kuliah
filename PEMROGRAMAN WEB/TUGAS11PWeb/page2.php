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
    
    <div>
<?php
if(isset($_POST['Login'])){
    $user=$_POST['username'];
    $pass=$_POST['password'];
    if($user=="admin" && $pass=="rahasia"){
        echo ("<h2>Login Berhasil,Selamat </h2>");
    }
else {
    echo "<h2> Login Gagal,Maaf Ulangi Lagi </h2>";
    }
}

?>

    </div>


    <div class="footer"> <font color="white" size="5"></br>
</body>