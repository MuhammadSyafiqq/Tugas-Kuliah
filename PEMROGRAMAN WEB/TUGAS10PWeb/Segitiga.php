<?php
	$tinggi=5;
	$baris =0;
	for($baris=1;$baris<=$tinggi;$baris++){
		for($i=1;$i<=$tinggi-$baris;$i++){
			echo " &nbsp ";
		}
		for ($j=1;$j< 2*$baris;$j++){
			echo "*";
		}
		echo "<br>";
	}
?>