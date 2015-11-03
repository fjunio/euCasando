<?php

namespace Dashboard\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enquete
 *
 * @ORM\Table(name="enquete", indexes={@ORM\Index(name="fk_Enquetes_Cliente1_idx", columns={"casamento_id"})})
 * @ORM\Entity
 */
class Enquete extends Application\Entity\Base\Entity
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
     * @ORM\Column(name="titulo", type="string", length=45, nullable=false)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="pergunta", type="string", length=200, nullable=false)
     */
    private $pergunta;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=1, nullable=false)
     */
    private $status;

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
    
    public function getTitulo() {
        return $this->titulo;
    }

    public function getPergunta() {
        return $this->pergunta;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getCasamento() {
        return $this->casamento;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setPergunta($pergunta) {
        $this->pergunta = $pergunta;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function setCasamento(\Casamento $casamento) {
        $this->casamento = $casamento;
    }




}

