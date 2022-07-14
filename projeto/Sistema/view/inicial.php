<?php
//require_once ("constants.php");
//@ $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
//$connection_error = $dbc->connect_error;
//if ($connection_error != null) {
//    echo "<p>Erro na conexão ao BANCO DE DADOS: $connection_error</p>";
//exit();
//}

// Consulta SQL para recuperar todos os registros da tabela menu
//$query = "SELECT * FROM menu";
// Executa a consulta no banco de dados conectado ($dbc)
//$res = mysqli_query($dbc, $query);
?>
<html>
<head>
<title>Sistema PHP (Meu Teste de Configuração)</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
	<h1>
		<p>Início do sistema</p>
	</h1>
	<ul>
	<?php
foreach ($dados as $row) {
    ?>
		<li><a href='index.php?oper=<?php echo $row["link"] ?>' id='info_ta'>
                     <?php echo $row["descricao"] ?></a>
			<div id='infoT' style='background-color: yellow'>
				<?php echo $row["ajuda"] ?>
			</div></li>
	 <?php
}
?>	
	</ul>
	
</body>
</html>
 
   
   
