<?php
require_once ("controle/Controle.php");
use Sistema\Controle\Controle;
/*
 * Instancia a classe Controle
 */
$controle = new Controle();
/*
 * Chama o método init() para iniciar o sistema
 * Vai controlar a partir da variável oper chamada via GET
 */
   $controle->init();
?>
