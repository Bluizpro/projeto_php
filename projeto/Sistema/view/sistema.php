<html>
 <head>
  <title>Sistema PHP (Meu Teste de Configuração)</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 </head>
 
 <a href="#" class='info_s'>Mostrar Informações</a>
 	<div id='info' style="background-color:LightYellow;">
 		<br />
 		Aqui temos alguns exemplos dos principais códigos PHP
 reunidos com algumas funcionalidades do JQuery
 	</div>
	<script type="text/javascript" language="javascript">  
	 	//$(document).click(function() {  
	 		// Escondemos o div com id = "info"
 			//$(".info").is(":hidden");
 			// Toda tag com classe = "info_s" que for 
           //clicada executará este código
 			$(".info_s").click(function() {
				//Verifica se a tag com id="info" está escondida
 				if ( $("#info").is(":hidden") ) {
 					$("#info").show();
 					$(this).html("Esconder Informações");
 				} 
 				else {
 					$("#info").hide();
 					$(this).html("Mostrar Informações");
 				}
 			});  
 		//});  
 	</script>  	
 </body>
 </html>
 <p><a href="index.php">Voltar para a Página Inicial</a></p>