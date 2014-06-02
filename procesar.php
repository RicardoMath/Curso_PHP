<?php

$operacion = $_GET["operacion"];
switch ($operacion) {
	case 'sumar':
		echo $_GET["numeroA"]+$_GET["numeroB"];
		break;
	case 'restar':
		echo $_GET["numeroA"]-$_GET["numeroB"];
		break;
	case 'multiplicar':
		echo $_GET["numeroA"]*$_GET["numeroB"];
		break;
	case 'dividir':
		if($_GET["numeroB"]!=0){
			echo $_GET["numeroA"]/$_GET["numeroB"];
		}else{
			echo "No se puede dividir por 0";
		}
		break;
	case 'modulo':
		echo $_GET["numeroA"]%$_GET["numeroB"];
		break;
}

?>
