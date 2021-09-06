<?php
	$arrWarna = array("Red", "Blue", "Yellow", "Black", "Pink");

	echo "Menampilkan isi array dengan for : <br>";
	for ($i=0; $i<count($arrWarna);  $i++) { 
		echo "apakah kamu suka <font color = $arrWarna[$i]>".$arrWarna[$i]."</font> ?<br>";
	}

	echo "<br>";

	echo "Menampilkan isi array dengan foreach : <br>";
	foreach ($arrWarna as $warna ) {
		echo "apakah kamu suka <font color = $warna>". $warna ."</font> ?<br>";
	}
?>