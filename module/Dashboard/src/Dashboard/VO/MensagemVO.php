<?php

namespace Dashboard\VO;

/**
 * Description of MensagemVO
 *
 * @author francis.oliveira
 */
class MensagemVO {
    
    /**
     *
     * @var type integer
     */
    private $id;
    
    /**
     *
     * @var type integer
     */
    private $idConfigMensagem;
    
    /**
     *
     * @var type string
     */
    private $nome;
    
    /**
     *
     * @var type string
     */
    private $email;
    
    /**
     *
     * @var type string
     */
    private $texto;
    
    /**
     *
     * @var type boolean
     */
    private $aprovada;
    
    public function getId() {
        return $this->id;
    }
    public function getIdConfigMensagem() {
        return $this->idConfigMensagem;
    }

    public function setIdConfigMensagem($idConfigMensagem) {
        $this->idConfigMensagem = $idConfigMensagem;
    }

    
    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getTexto() {
        return $this->texto;
    }

    public function getAprovada() {
        return $this->aprovada;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setTexto($texto) {
        $this->texto = $texto;
    }

    public function setAprovada($aprovada) {
        $this->aprovada = $aprovada;
    }


}
