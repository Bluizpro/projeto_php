<?php
namespace Sistema\Controle;
require_once(dirname(__DIR__) . "/constants.php");
class DB {
    
    public $dbc;
    
    public function __construct() {
        
        $this->dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $connection_error = $this->dbc->connect_error;
        
        if ($connection_error != null) {
            echo "<p>Erro na conexão ao BANCO DE DADOS: $connection_error</p>";
            exit();
        }
    }
    
    /* Retorna os campos
     * da query passada na functiona
     */
    public function query($query) {
        $back = array();
        $res = mysqli_query($this->dbc, $query);
        
        if ($res) {
            while ($row = mysqli_fetch_assoc($res)) {
                $back[] = $row;
            }
        }
        return $back;
    }
    
    public function __destruct() {
        //Fechando a conexão que não será mais usada
        mysqli_close($this->dbc);
    }
}
