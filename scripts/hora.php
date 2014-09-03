<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: text/html; charset=iso-8859-1');
function hace($fecha){ 
//Convertimos la fecha de tipo TIMESTAMP MYSQL A UNIX timestamp
$mysqltime = $fecha;
$fecha = strtotime($mysqltime);
//Convertimos la fecha de tipo TIMESTAMP MYSQL A UNIX timestamp
$diferencia = time() - $fecha ; 
$segundos = $diferencia ; 
$minutos = round($diferencia / 60 ); 
$horas = round($diferencia / 3600 ); 
$dias = round($diferencia / 86400 ); 
$semanas = round($diferencia / 604800 ); 
$mes = round($diferencia / 2419200 ); 
$anio = round($diferencia / 29030400 ); 

if($segundos <= 60){ 
echo "·Hace segundos·"; 

}else if($minutos <=60){ 
if($minutos==1){ 
echo "·Hace un minuto·"; 
}else{ 
echo "·Hace $minutos minutos·"; 
} 
}else if($horas <=24){ 
if($horas==1){ 
echo "·Hace una hora·"; 
}else{ 
echo "·Hace $horas horas·"; 
} 
}else if($dias <= 7){ 
if($dias==1){ 
echo "·Hace un día·"; 
}else{ 
echo "·Hace $dias días·"; 
} 
}else if($semanas <= 4){ 
if($semanas==1){ 
echo "·Hace una semana·"; 
}else{ 
echo "Hace $semanas semanas"; 
} 
}else if($mes <=12){ 
if($mes==1){ 
echo "·Hace un mes·"; 
}else{ 
echo "·Hace $mes meses·"; 
} 
}else{ 
if($anio==1){ 
echo "·Hace un año·"; 
}else{ 
echo "·Hace $anio años·"; 
} 
} 
}  
?>