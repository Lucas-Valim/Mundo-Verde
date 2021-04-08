<?php 
	class Connection 
	{
		private $pdo;

		function __construct($dsn, $usuario, $senha)
		{
			try  
			{
				$pdo = new PDO($dsn, $usuario, $senha, array(PDO::ATTR_PERSISTENT => true));

				echo "Conexão realizada com sucesso!";
			}
			catch (PDOException $e) 
			{
				echo $e->getMessage();
			}
		}

		public function getPDO() #Usar pra quando for fazer os statements, chamar essa função e chamar os métodos. Ex.: X.getPDO()::beginTransaction() ou X.getPDO()->beginTransaction() tem q ver qual o certo. Não sei se o PDO deve ser usado desta maneira, tem que ser verificado.
		{
			return $pdo;
		}
	}
?>