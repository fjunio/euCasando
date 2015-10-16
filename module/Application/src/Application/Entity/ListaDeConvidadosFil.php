<?php
namespace Application\Entity;

class ListaDeConvidadosFil
{
    protected $nome;
    protected $email;

    public function setNome($value)
    {
        $this->nome = $value;
    }    
    
    public function getNome()
    {
        return $this->nome;
    }       

    public function setEmail($value)
    {
        $this->email = $value;
    }    
    
    public function getEmail()
    {
        return $this->email;
    }       

    
}