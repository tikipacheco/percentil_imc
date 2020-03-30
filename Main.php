<?php
include 'BMI.php';

$obj=new BMI();
$resultado=$obj->CalcularPercentilMetros(40,138,1,10);
var_dump($resultado);