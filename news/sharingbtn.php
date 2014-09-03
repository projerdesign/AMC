<?php
	header('Access-Control-Allow-Origin: *');
	header('Content-Type: text/html; charset=iso-8859-1');
	require('../Connections/Loging.php');
	$noticia = $_GET["id"];
	if (!$noticia == ""){
		$sql = "SELECT url, id, titulo FROM  am_noticias WHERE id = ".$noticia."  ORDER BY id DESC";
		$req = mysql_query($sql);
		while($result = mysql_fetch_object($req)){
				$url = $result->url;
				$id = $result->id;
				$titulo = $result->titulo;
				echo'
					<button class="push" onclick="window.plugins.socialsharing.share(\''.$titulo.'\', null, null, \''.$url.'\')"></button>
					';
					
	
				
		}
	}
?>