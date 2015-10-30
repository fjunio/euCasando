<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;
use ZfcUser\Entity\UserInterface as ZfcUserInterface;
use ZfcRbac\Identity\IdentityInterface;
use LosBase\Entity\AbstractEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="usuario")
 */
class Usuario extends AbstractEntity implements ZfcUserInterface, IdentityInterface {

    /**
     * @ORM\Column(type="string", length=250)
     */
    protected $nome;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $email = '';

    /**
     * @ORM\Column(type="string", length=32)
     * Possiveis: visitante, usuario, suporte, admin
     */
    protected $permissao = 'visitante';
    protected $username;

    /**
     * @ORM\Column(type="string", length=128)
     */
    protected $password = '';
    protected $confirmesenha;

    /**
     * @ORM\ManyToOne(targetEntity="Application\entity\Pessoa")
     * @ORM\JoinColumn(nullable=false)
     * @ORM\OrderBy({"nome" = "ASC"})
     */
    protected $pessoa;

    public function __construct() {
        $this->created = new \DateTime('now');
        $this->updated = new \DateTime('now');
        $this->acessos = new ArrayCollection();
    }

    /**
     * @return string the $nome
     */
    public function getNome() {
        return $this->nome;
    }

    /**
     * @param string $nome
     */
    public function setNome($nome) {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Retorna o campo $permissao
     * @return $permissao
     */
    public function getPermissao() {
        return $this->permissao;
    }

    /**
     * Seta o campo $permissao
     * @param field_type $permissao
     * @return $this
     */
    public function setPermissao($permissao) {
        $this->permissao = $permissao;

        return $this;
    }

    public function getRoles() {
        return array(
            $this->permissao
        );
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
        return $this;
    }

    public function getDisplayName() {
        return $this->getNome();
    }

    public function setDisplayName($displayName) {
        
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        if (!empty($password)) {
            $this->password = (string) $password;
        }
    }

    public function getState() {
        
    }

    public function setState($state) {
        
    }

    public function getConfirmesenha() {
        return $this->confirmesenha;
    }

    public function setConfirmesenha($confirmesenha) {
        $this->confirmesenha = $confirmesenha;
        return $this;
    }

    function getPessoa() {
        return $this->pessoa;
    }

    function setPessoa($pessoa) {
        $this->pessoa = $pessoa;
    }

    public function __toString() {
        return $this->getDisplayName();
    }
}
