<?php
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;
use LosBase\Entity\AbstractEntity;
 
/**
 * @ORM\Entity
 * @ORM\Table(name="pessoa")
 */
class Pessoa extends AbstractEntity
{
    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $nome;
    /**
     * @ORM\Column(type="string", length=45)
     */
    protected $cpf;
    /**
     * @ORM\Column(type="string", length=45)
     */
    protected $cnpj;
    /**
     * @ORM\Column(type="string", length=200)
     */
    protected $endereco;
    /**
     * @ORM\Column(type="string", length=45)
     */
    protected $telefone;
    /**
     * @ORM\Column(type="string", length=45)
     */
    protected $email;

    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getCnpj() {
        return $this->cnpj;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getEmail() {
        return $this->email;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setEmail($email) {
        $this->email = $email;
    }
    
    public function __toString() {
        return $this->nome;
    }
}