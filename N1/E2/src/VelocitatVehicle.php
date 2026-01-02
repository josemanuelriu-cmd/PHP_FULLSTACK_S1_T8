<?php
class VelocitatVehicle  {

	public function CurrentSpeed(int $Speed) {
		return match (true) {
			$Speed < 30 => "Molt lent",
			$Speed <= 60 => "Velocitat adequada",
			$Speed <= 80 => "Excés lleu",
			$Speed <= 100 => "Excés moderat",
			default => "Excés greu",
		};		
	}
}
?>