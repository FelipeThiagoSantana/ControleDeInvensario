<?php

	# Base de Dados
	include 'db.php';
	# Cabeçalho
	include 'header.php';
	# Conteúdo da pagina
	if (isset($_GET['pagina'])){
		$pagina = $_GET['pagina'];
	}
	else{
		$pagina = 'home';
	}

	if($pagina == 'usuarios'){
		include 'views/usuarios.php';
	}

	elseif ($pagina == 'dispositivo'){
		include 'views/dispositivo.php';
	}
	elseif($pagina == 'entradas'){
		include 'views/entradas.php';
	}
	elseif($pagina == 'saidas'){
		include 'views/saidas.php';
	}
	else{
		include 'views/home.php';
	}


	# Rodapé
	include 'footer.php';
