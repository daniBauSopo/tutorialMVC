<?php

#EL INDEX:En el mostraremos la salida de las vistas al usuario y tambien a traves de el enviaremos las distintas acciones que el usuario envie al controlador.

#require() establece que el codigo del archivo invocado es requerido, es decir,obligatorio para el funcionamiento del programa.Por ello, si el archivo especificado en la funcion require() no se encuentra saltara un error "PHP Fatal error" y el programa PHP se detendra.

#La version require_one() funciona de la misma manera que su respectivo, salvo que , al utilizar la version _once , se impide la carga de un mismo archivo mas de una vez.
#Si requerimos el codigo mas de una vez corremos el riesgo de redeclaraciones de varialbles,funciones o clases.

require_once "controladores/plantilla.controlador.php";
require_once "controladores/formularios.controlador.php";

require_once "modelos/formularios.modelo.php";


$plantilla = new ControladorPlantilla();
$plantilla -> ctrTraerPlantilla();

?>