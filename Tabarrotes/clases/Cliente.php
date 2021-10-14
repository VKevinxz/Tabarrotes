<?php
namespace clases;
use config\ConexionDB;
include_once "../config/autoload.php";
include_once "../config/ConexionDB.php";

class Cliente
{
    private $id;
    private $nombres;
    private $apellidos;
    private $dni;
    private $direccion;
    private $celular;
    private $usuario;
    private $pass;
    private $rol;


    public function setUser(string $usuario)
    {
        $this->usuario = $usuario;
    }  
    public function getUser()
    {
        return $this->usuario;
    }

    public function setPass(string $pass)
    {
        $this->pass = $pass;
    }

    public function getPass()
    {
        return $this->pass;
    }
    public function setRol(string $rol)
    {
        $this->rol = $rol;
    }

    public function getRol()
    {
        return $this->rol;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setNombre(string $nombres)
    {
        $this->nombres = $nombres;
    }

    public function getNombre()
    {
        return $this->nombres;
    }

    public function setApellido(string $apellidos)
    {
        $this->apellidos = $apellidos;
    }

    public function getApellido()
    {
        return $this->apellidos;
    }
    public function setDni(int $dni)
    {
        $this->dni = $dni;
    }

    public function getDni()
    {
        return $this->dni;
    }
    public function setDireccion(string $direccion)
    {
        $this->direccion = $direccion;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }
    public function setCelular(int $celular)
    {
        $this->celular = $celular;
    }

    public function getCelular()
    {
        return $this->celular;
    }

}