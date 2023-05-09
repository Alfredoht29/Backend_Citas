<?php
$cita=json_decode(file_get_contents('php://input'),true);
$usuario=$cita['usuario'];
$tipo=$cita['tipo'];
$fecha=$cita['fecha'];
?>