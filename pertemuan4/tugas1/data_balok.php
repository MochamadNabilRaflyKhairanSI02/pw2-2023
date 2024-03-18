<?php 
		require_once 'class_balok.php';


		$balok = new Balok(25, 10, 5);
		echo $balok->getLuas() . "<br>";
		echo $balok->getKeliling() . "<br>";
		echo $balok->getVolume() . "<br>";

?>