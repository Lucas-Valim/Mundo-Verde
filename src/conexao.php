<?php
	$servidor = "localhost"; //servidor local
	$usuario = "root"; //usuario
	$senha = ""; // senha
	$dbname = "sorte_verde"; //nome do projeto
	
	//Criar a conexao e atribuir conexao na variavel  $conn
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname); 