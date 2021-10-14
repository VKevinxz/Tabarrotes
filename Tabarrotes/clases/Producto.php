<?php
namespace clases;
use config\ConexionDB; 
include_once "../config/autoload.php";

class Producto{

    private $idtp;
    private $id;
    private $descripcion;
    private $precio;

    public function setId(int $id)
    {
        $this->id = $id;
    }  

    public function getId()
    {
        return $this->id;
    }  
    
    public function setIdTP(int $idtp)
    {
        $this->idtp =$idtp;
    } 
    
    public function getIdTP()
    {
        return $this->idtp;
    } 
    public function setinfoProducto(string $infoProducto
    {
        $this->infoProducto =$infoProducto;
    } 
    
    public function getinfoProducto()
    {
        return $this->infoProducto;
    } 
    public function setPrecio(int $precio)
    {
        $this->precio =$precio;
    } 
    
    public function getPrecio()
    {
        return $this->precio;
    } 
    

   }