<?php

namespace Dashboard\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SiteListaVirtual
 *
 * @ORM\Table(name="site_lista_virtual", indexes={@ORM\Index(name="fk_Site_Lista_Virtual_Casamento1_idx", columns={"Casamento_id"})})
 * @ORM\Entity
 */
class SiteListaVirtual extends Application\Entity\Base\Entity
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
     * @ORM\Column(name="notifica_presente_comprado", type="boolean", nullable=true)
     */
    private $notificaPresenteComprado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="despesa_convidado", type="boolean", nullable=true)
     */
    private $despesaConvidado;

    /**
     * @var \Casamento
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Casamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Casamento_id", referencedColumnName="id")
     * })
     */
    private $casamento;
    
    public function getNotificaPresenteComprado() {
        return $this->notificaPresenteComprado;
    }

    public function getDespesaConvidado() {
        return $this->despesaConvidado;
    }

    public function getCasamento() {
        return $this->casamento;
    }

    public function setNotificaPresenteComprado($notificaPresenteComprado) {
        $this->notificaPresenteComprado = $notificaPresenteComprado;
    }

    public function setDespesaConvidado($despesaConvidado) {
        $this->despesaConvidado = $despesaConvidado;
    }

    public function setCasamento(\Casamento $casamento) {
        $this->casamento = $casamento;
    }




}

