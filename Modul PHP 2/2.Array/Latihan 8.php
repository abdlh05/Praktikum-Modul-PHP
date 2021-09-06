<?php
	$arrNilai = array(
		'Abdullah' => 92 , 
		'Hilmi' => 90, 
		'Juan' => 95,
		'Jun' => 89);
	echo $arrNilai['Juan']."<br>"; 			//95
	echo $arrNilai['Abdullah']."<br>"; 		//92

	$arrWarna = array();
	$arrWarna ['Abdullah'] = 92;
	$arrWarna ['Hilmi'] = 90;
	$arrWarna ['Juan'] = 95;
	$arrWarna ['Jun'] = 89;
	echo $arrNilai['Hilmi']."<br>"; 		//90
	echo $arrNilai['Jun']."<br>"; 			//89

?>