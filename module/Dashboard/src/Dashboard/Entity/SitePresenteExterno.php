<?php

namespace Dashboard\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SitePresenteExterno
 *
 * @ORM\Table(name="site_presente_externo", indexes={@ORM\Index(name="fk_Cliente_Links_Presentes_Cliente1_idx", columns={"casamento_id"})})
 * @ORM\Entity
 */
class SitePresenteExterno extends Application\Entity\Base\Entity
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
     * @ORM\Column(name="nome_loja", type="string", length=45, nullable=true)
     */
    private $nomeLoja;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=200, nullable=false)
     */
    private $link;

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
    
    public function getNomeLoja() {
        return $this->nomeLoja;
    }

    public function getLink() {
        return $this->link;
    }

    public function getCasamento() {
        return $this->casamento;
    }

    public function setNomeLoja($nomeLoja) {
        $this->nomeLoja = $nomeLoja;
    }

    public function setLink($link) {
        $this->link = $link;
    }

    public function setCasamento(\Casamento $casamento) {
        $this->casamento = $casamento;
    }




}

