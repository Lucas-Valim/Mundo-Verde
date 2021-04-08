<?php 
include("conn.php");

	class Usuario
	{
		private $nome;
		private $email;
		private $senha;
		private $dataNascmiento;
		private $cep;
		private $endereco;
		private $complemento;
		private $tipo;
		private $pdo;

		function __construct()
		{
			$pdo = new Connection("pgsql:host=localhost;port=5433;dbname=Teste_Sorte_Verde", "Usuario", "159753"); #Pra isso aqui funcionar tem q ter o banco Teste_Sorte_Verde criado la e com a role de Usuario criado com a senha informada nos parâmetros.
		}

	}

	$usuario = new Usuario(); #Pra testar se tá conectando no banco
?>