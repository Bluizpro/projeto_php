<?php
namespace Sistema\Controle;
require_once("DB.php");
use Sistema\Controle\DB;
class Controle {
    
    public $db;
    public $oper;
    
    public function __construct() {
        $this->db = new DB();
        $this->oper = isset($_REQUEST['oper'])?$_REQUEST['oper']:NULL;
        
    }
    
    public function init() {
        if ( $this->oper) {
            include ( dirname(__DIR__) . "/view/" . $this->oper);
        } else {
            $this->showMenu();
        }
    }
    
    public function showMenu() {
        $dados = $this->db->query("select * from menu");
        include ( dirname(__DIR__) . "/view/inicial.php" );
    }
    
}