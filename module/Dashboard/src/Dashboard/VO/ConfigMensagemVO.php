<?php

namespace Dashboard\VO;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Description of ConfigMensagemVO
 *
 * @author francis.oliveira
 */
class ConfigMensagemVO {
    
    /**
     *
     * @var type integer
     */
    private $id;
    
    /**
     *
     * @var type boolean
     */
    private $enviarEmail;
    
    /**
     *
     * @var type boolean
     */
    private $necessitaAprovacao;
    
    /**
     *
     * @var type integer
     */
    private $idCasamento;
    
    /**
     *
     * @var type ArrayCollection
     */
    private $listaMensagens;
    
    public function __construct() {
        $this->listaMensagens = new ArrayCollection();
    }
    
    public function getListaMensagens() {
        return $this->listaMensagens;
    }

    public function addMensagem(MensagemVO $mensagemVO){
        $this->listaMensagens->add($mensagemVO);
    }

    public function removeMensagem(MensagemVO $mensagemVO){
        $this->listaMensagens->remove($mensagemVO);
    }
        
    public function getId() {
        return $this->id;
    }

    public function getEnviarEmail() {
        return $this->enviarEmail;
    }

    public function getNecessitaAprovacao() {
        return $this->necessitaAprovacao;
    }

    public function getIdCasamento() {
        return $this->idCasamento;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setEnviarEmail($enviarEmail) {
        $this->enviarEmail = $enviarEmail;
    }

    public function setNecessitaAprovacao($necessitaAprovacao) {
        $this->necessitaAprovacao = $necessitaAprovacao;
    }

    public function setIdCasamento($idCasamento) {
        $this->idCasamento = $idCasamento;
    }


}
