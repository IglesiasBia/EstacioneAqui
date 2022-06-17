<?php
	// if(!isset($_SESSION)) session_start();

	session_start(); // Inicia a sessão
	
	session_destroy(); // Destrói a sessão limpando todos os valores salvos
	header("Location: ../index.php"); exit; // Redireciona o visitante
?>