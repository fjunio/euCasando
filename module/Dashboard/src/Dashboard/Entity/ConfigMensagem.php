<?php

namespace Dashboard\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConfigMensagem
 *
 * @ORM\Table(name="config_mensagem", indexes={@ORM\Index(name="fk_table1_Cliente2", columns={"casamento_id"})})
 * @ORM\Entity
 */
class ConfigMensagem
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
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Casamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="casamento_id", referencedColumnName="id")
     * })
     */
    private $casamento;
    
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

    public function setCasamento(\Casamento $casamento) {
        $this->casamento = $casamento;
    }




}

