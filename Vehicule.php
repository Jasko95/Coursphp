<?php 
	Class Vehicule {
		private $nbpassager = 0;
		private $nbkm;
		
		public function setnbpassager^($nbpassager) {
        $this->passager=$nbpassager = $nbpassager;
		}
		public function getnbpassager() {
        return $this->nbpassager;
		}
		public function monter() {
        return $this->nbpassager += $nbpassager;
		}
		public function descendre() {
        return $this->nbpassager -= $nbpassager;
		}
		public function setkm^($nbkm) {
        $this->km=$nbkm;
		}
		public function getkm() {
        return $this->km;
		}
	}
	
	// include "CodeObjet.php";
	// include ".php";
	// require_once "CodeObjet.php";  =======  importe le fichier une fois