<?php
	header('Access-Control-Allow-Origin: *');
	header('Content-Type: text/html; charset=iso-8859-1');
	require('../Connections/Loging.php');
	include('../scripts/hora.php');
	$noticia = $_GET["id"];
	if (!$noticia == ""){
		$sql = "SELECT * FROM  am_noticias WHERE id = ".$noticia."  ORDER BY id DESC";
		$req = mysql_query($sql);
		while($result = mysql_fetch_object($req)){
				$noticia = $result->noticia;
				$publicado = $result->publicado;
				$titulo = $result->titulo;
				$img = $result->img;
				$fecha_publiciacion = $result->fecha;
				$noticia = $result->noticia;
				echo'
					<h3>',hace($fecha_publiciacion).'<h3>
					<h1>' .$titulo.'</h1>
					<h4>Publicado por '.$publicado.'</h4>
					<img src="img/'.$img.'" alt="img"/>
					<p>'.$noticia.'</p>';
					
	
				
		}
	}
?>