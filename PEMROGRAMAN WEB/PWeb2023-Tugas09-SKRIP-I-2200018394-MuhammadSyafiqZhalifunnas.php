<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="file.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<center>
	<div class="card" >
<?php
	$gaji= 1000000;
	$pajak = 0.1;
	$thp = $gaji - ($gaji*$pajak);

	echo "Gaji Sebelum pajak = Rp. $gaji <br>";
	echo "Gaji yang dibawa pulang = Rp. $thp <br>";

?>
</div>
	<div class="card2" >
<?php
	$a = 5;
	$b = 4;

	echo "$a == $b : ". ($a == $b);
	echo "<br>$a != $b : ". ($a != $b);
	echo "<br>$a > $b : ". ($a > $b);
	echo "<br>$a < $b : ". ($a < $b);
	echo "<br>($a == $b) &&($a > $b) : ".(($a != $b) &&  ($a > $b));
	echo "<br>($a == $b) ||($a > $b) : ".(($a != $b) ||  ($a > $b));
?>
</div>


</center>





</body>
=======
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="file.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<center>
	<div class="card" >
<?php
	$gaji= 1000000;
	$pajak = 0.1;
	$thp = $gaji - ($gaji*$pajak);

	echo "Gaji Sebelum pajak = Rp. $gaji <br>";
	echo "Gaji yang dibawa pulang = Rp. $thp <br>";

?>
</div>
	<div class="card2" >
<?php
	$a = 5;
	$b = 4;

	echo "$a == $b : ". ($a == $b);
	echo "<br>$a != $b : ". ($a != $b);
	echo "<br>$a > $b : ". ($a > $b);
	echo "<br>$a < $b : ". ($a < $b);
	echo "<br>($a == $b) &&($a > $b) : ".(($a != $b) &&  ($a > $b));
	echo "<br>($a == $b) ||($a > $b) : ".(($a != $b) ||  ($a > $b));
?>
</div>


</center>





</body>
>>>>>>> 3c0122604f77c350ff640fce9a0aeac9e94072db
</html>