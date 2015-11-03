<?php

namespace Dashboard\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Musica
 *
 * @ORM\Table(name="musica", indexes={@ORM\Index(name="fk_Lista_Musicas_Cliente1", columns={"casamento_id"})})
 * @ORM\Entity
 */
class Musica extends Application\Entity\Base\Entity
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
     * @ORM\Column(name="caminho_musica", type="string", length=45, nullable=false)
     */
    private $caminhoMusica;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tocar_aleatorio", type="boolean", nullable=false)
     */
    private $tocarAleatorio;

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
    
    public function getCaminhoMusica() {
        return $this->caminhoMusica;
    }

    public function getTocarAleatorio() {
        return $this->tocarAleatorio;
    }

    public function getCasamento() {
        return $this->casamento;
    }

    public function setCaminhoMusica($caminhoMusica) {
        $this->caminhoMusica = $caminhoMusica;
    }

    public function setTocarAleatorio($tocarAleatorio) {
        $this->tocarAleatorio = $tocarAleatorio;
    }

    public function setCasamento(\Casamento $casamento) {
        $this->casamento = $casamento;
    }




}

