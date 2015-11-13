<?php

namespace Dashboard\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RespostaEnquete
 *
 * @ORM\Table(name="resposta_enquete", indexes={@ORM\Index(name="fk_Resposta_Enquete_Enquete1_idx", columns={"Enquete_id"})})
 * @ORM\Entity
 */
class RespostaEnquete extends Application\Entity\Base\Entity
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
     * @ORM\Column(name="sim", type="string", length=1, nullable=true)
     */
    private $sim;

    /**
     * @var string
     *
     * @ORM\Column(name="nao", type="string", length=1, nullable=true)
     */
    private $nao;

    /**
     * @var string
     *
     * @ORM\Column(name="talvez", type="string", length=1, nullable=true)
     */
    private $talvez;

    /**
     * @var \Enquete
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\ManyToOne(targetEntity="Enquete", inversedBy="respostaEnquete")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Enquete_id", referencedColumnName="id")
     * })
     */
    private $enquete;
    
    public function getSim() {
        return $this->sim;
    }

    public function getNao() {
        return $this->nao;
    }

    public function getTalvez() {
        return $this->talvez;
    }

    public function getEnquete() {
        return $this->enquete;
    }

    public function setSim($sim) {
        $this->sim = $sim;
    }

    public function setNao($nao) {
        $this->nao = $nao;
    }

    public function setTalvez($talvez) {
        $this->talvez = $talvez;
    }

    public function setEnquete(\Enquete $enquete) {
        $this->enquete = $enquete;
    }




}

