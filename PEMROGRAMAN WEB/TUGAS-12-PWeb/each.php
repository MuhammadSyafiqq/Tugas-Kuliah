<?php
$arrNilai=array("Fulan"=>80,"Fulin"=>90,"Fulan"=>75,"Falan"=>85);
echo "Menampilkan isi array assosiatif dengan FOREACH :<br>";
foreach ($arrNilai as $nama => $nilai) {
	echo "nilai $nama = $nilai<br>";
}

echo "<br>Menampilkan isi array assosiatif dengan WHILE dan LIST : <br>";

while (list ($nama,$nilai) = reach($arrNilai)){
	echo "nilai $nama=$nilai<br>";
}
?>