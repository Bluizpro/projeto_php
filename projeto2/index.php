<html>
 <head>
  <title>Sistema PHP (Meu Teste de Configuração)</title>
 </head>
 <body>
 <h1> <?php echo "<p>Início do sistema</p>"; ?></h1>
  <style>
        #fun {
            margin: 10px;
             background: yellow;
            font-size: 16px;
        }
       
    </style>
 
	<ul>
		<li><a href="lista.php">Uma lista em PHP</a></li>
		<div id="funtextbox"><li><a href="tabela.php">Tabelas com PHP</a></li></div>
		<span id="fun"></span>
		<br>		
		<li><a href="campos.php">Campos em PHP</a></li>
		<li><a href="include.php">Includes com PHP</a></li>
		<li><a href="calculo.php">calculo com PHP</a></li>
		<li><a href="sistema.php">sistema com PHP</a></li>
	</ul>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>	
	<script type="text/javascript">	
	$(function(){  
	    $("#funtextbox").hover(function(){
		    $("#fun").text("Estas são informações sobre as tabelas!");
	    }, function(){
		    $("#fun").text("");
	      
	        		         
	    });
	});


	

</script>
 </body>
</html>
