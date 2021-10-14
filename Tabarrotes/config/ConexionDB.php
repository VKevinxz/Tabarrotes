<?php
namespace config;

class Conexion{
    private $dsn = "mysql:host=localhost:3307;dbname=Abarrotes";
    private $username = "root";
    private $password = "Kevin123";
    private $opciones = array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES "UTF8"');
    public $conectar;

    public function __construct()
    {
        $this->conectar = new \PDO($this->dsn, $this->username, $this->password, $this->opciones);
    }

    public function desconectar(){
        $this->conectar = null;
    }
}