<?php

namespace Dashboard\Entity;

use Application\Entity\Base\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * ConfigMensagem
 *
 * @ORM\Table(name="config_mensagem")
 * @ORM\Entity
 */
class ConfigMensagem  extends Entity
{
//    /**
//     * @var integer
//     *
//     * @ORM\Column(name="id", type="integer", nullable=false)
//     * @ORM\Id
//     * @ORM\GeneratedValue(strategy="NONE")
//     */
//    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enviar_email", type="boolean", nullable=false)
     */
    private $enviarEmail;

    /**
     * @var boolean
     *
     * @ORM\Column(name="necessita_aprovacao", type="boolean", nullable=false)
     */
    private $necessitaAprovacao;

    /**
     * @var \Casamento
     * @ORM\OneToOne(targetEntity="Casamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="casamento_id", referencedColumnName="id")
     * })
     */
    private $casamento;
    
    /**
     * @var \Mensagem
     * @ORM\OneToMany(targetEntity="Mensagem", mappedBy="configMensagem", cascade={"all"})
     */
    private $mensagens;
    
    public function __construct() {
        parent::__construct();
        $this->mensagens = new ArrayCollection();
        
    }    
    
    public function getMensagens() {
        return $this->mensagens;
    }

    public function addMensagem(Mensagem $mensagem){
        $this->mensagens->add($mensagem);
        return $this;
    }        
    
    public function removeMensagem(Mensagem $mensagem){
        $this->mensagens->remove($mensagem);
        return $this;
    }

    public function getEnviarEmail() {
        return $this->enviarEmail;
    }

    public function getNecessitaAprovacao() {
        return $this->necessitaAprovacao;
    }

    public function getCasamento() {
        return $this->casamento;
    }

    public function setEnviarEmail($enviarEmail) {
        $this->enviarEmail = $enviarEmail;
    }

    public function setNecessitaAprovacao($necessitaAprovacao) {
        $this->necessitaAprovacao = $necessitaAprovacao;
    }

    public function setCasamento(Casamento $casamento) {
        $this->casamento = $casamento;
    }

}

