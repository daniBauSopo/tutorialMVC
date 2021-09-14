<?php

Class ControladorPlantilla{

	/*===================================
	Llamada a la plantilla
	=====================================*/

	public function ctrTraerPlantilla(){

		#include() Se utiliza para invocar el archivo que contiene el codigo html-php
		include "vistas/plantilla.php";

	}

}