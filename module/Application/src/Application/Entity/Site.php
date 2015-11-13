<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;
use Application\Entity\Base\Entity;

/**
 * Site
 *
 * @ORM\Table(name="site", indexes={@ORM\Index(name="fk_Site_Casamento1_idx", columns={"Casamento_id"}), @ORM\Index(name="fk_Site_Layout1_idx", columns={"Layout_id"})})
 * @ORM\Entity
 */
class Site extends Entity
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
     * @var string
     *
     * @ORM\Column(name="site", type="string", length=60, nullable=false)
     */
    private $site;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ativo", type="boolean", nullable=false)
     */
    private $ativo;

    /**
     * @var string
     *
     * @ORM\Column(name="senha_acesso_externo", type="string", length=45, nullable=false)
     */
    private $senhaAcessoExterno;

    /**
     * @var \Casamento
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="\Dashboard\Entity\Casamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Casamento_id", referencedColumnName="id")
     * })
     */
    private $casamento;

    /**
     * @var \Layout
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Layout")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Layout_id", referencedColumnName="id")
     * })
     */
    private $layout;
    
    public function getSite() {
        return $this->site;
    }

    public function getAtivo() {
        return $this->ativo;
    }

    public function getSenhaAcessoExterno() {
        return $this->senhaAcessoExterno;
    }

    public function getCasamento() {
        return $this->casamento;
    }

    public function getLayout() {
        return $this->layout;
    }

    public function setSite($site) {
        $this->site = $site;
    }

    public function setAtivo($ativo) {
        $this->ativo = $ativo;
    }

    public function setSenhaAcessoExterno($senhaAcessoExterno) {
        $this->senhaAcessoExterno = $senhaAcessoExterno;
    }

    public function setCasamento(\Casamento $casamento) {
        $this->casamento = $casamento;
    }

    public function setLayout(\Layout $layout) {
        $this->layout = $layout;
    }




}

