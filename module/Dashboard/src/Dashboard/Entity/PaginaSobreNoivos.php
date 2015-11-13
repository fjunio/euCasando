<?php

namespace Dashboard\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaginaSobreNoivos
 *
 * @ORM\Table(name="pagina_sobre_noivos", indexes={@ORM\Index(name="fk_Sobre_noivos_Cliente1", columns={"casamento_id"})})
 * @ORM\Entity
 */
class PaginaSobreNoivos extends Application\Entity\Base\Entity
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
     * @ORM\Column(name="texto", type="text", length=65535, nullable=true)
     */
    private $texto;

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

    /**
     * @var \Foto
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Foto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="foto_id", referencedColumnName="id")
     * })
     */
    private $foto;
    
    /**
     * @var \Video
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Video")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="video_id", referencedColumnName="id")
     * })
     */
    private $video;    
    
    public function getTexto() {
        return $this->texto;
    }

    public function getCasamento() {
        return $this->casamento;
    }

    public function getFoto() {
        return $this->foto;
    }

    public function getVideo() {
        return $this->video;
    }

    public function setTexto($texto) {
        $this->texto = $texto;
    }

    public function setCasamento(\Casamento $casamento) {
        $this->casamento = $casamento;
    }

    public function setFoto(\Foto $foto) {
        $this->foto = $foto;
    }

    public function setVideo(\Video $video) {
        $this->video = $video;
    }



}

