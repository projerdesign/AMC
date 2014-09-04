<?php
	header('Access-Control-Allow-Origin: *');
	header('Content-Type: text/html; charset=iso-8859-1');
	require('Connections/Loging.php');
		$sql = "SELECT id, img, titulo, destacada FROM  am_noticias ORDER BY id DESC";
		$req = mysql_query($sql);
		while($result = mysql_fetch_object($req)){
			echo mysql_error();
				$titulo = $result->titulo;
				$img = $result->img;
				$id = $result->id;
				$destacada = $result->destacada;
				if($destacada == 1){
					echo'<a href="news/noticia.html?id='. $id.'"><li class="newimportant shrink">';
				}else{
					echo'<a href="news/noticia.html?id='.$id.'"><li class="shrink">';
				}
				echo'
					<div class="imgcontet">
						<img src="http://storybox.mx/concertus/news/img/'.$img.'" alt="img"/>
						<h1>'.$titulo.'</h1>
					</div>
        		</li></a>
				';
		}

?>

