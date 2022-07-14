<table>
   <tr>
     <th>Valor</th>
     <th>Descrição</th>
   </tr>
<?php
for ($i=0; $i<10; $i++) {
?>    
   <tr>
     <td>Linha <?php echo $i ?></td>
     <td>Conteudo da Linha <?php echo $i ?></td>
    </tr>
<?php 
}
?>
</table>
<br />
<p><a href="index.php">Voltar para a Página Inicial</a></p>