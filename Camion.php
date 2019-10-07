<?php 
	require_once "Vehicule.php";
	require_once "Voiture.php";
	require_once "Moto.php";
	
	$mitsu = new Moto();
	$voiture1 = new Voiture();
	echo " M - Vous êtes:" . $mitsu -> getnbpassager()."<br>";
	echo " V - Vous êtes:" . $voiture1 -> getnbpassager()."<br>";
	$mitsu->monter(1);
	$voiture1->monter(4);
	$mitsu->parcourir(3);
	echo " M - Vous avez fait:" . $mitsu -> getnbkm()."km<br>";
	echo " M - Vous êtes:" . $mitsu -> getnbpassager()."<br>";
	echo " V - Vous êtes:" . $voiture1 -> getnbpassager()."<br>";
	$voiture1->parcourir(1);
	$mitsu->parcourir(5);
	echo " M - Vous êtes:" . $mitsu -> getnbkm()."<br>";
	echo " V - Vous êtes:" . $voiture1 -> getnbkm()."<br>";
	
	// include "CodeObjet.php";
	// include ".php";
	// require_once "CodeObjet.php";  =======  importe le fichier une fois