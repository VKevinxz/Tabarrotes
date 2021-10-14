<?php
namespace clases;
use config\ConexionDB; 
include_once "../config/autoload.php";

class Pedido
{
    private $id;

    public function setId(int $id)
    {
        $this->id = $id;
    }  

    public function getId()
    {
        return $this->id;
    }
}