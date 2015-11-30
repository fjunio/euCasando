<?php

namespace Dashboard\Entity;

use Application\Entity\Base\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * PaginaSobreNoivos
 *
 * @ORM\Table(name="pagina_sobre_noivos")
 * @ORM\Entity
 */
class PaginaSobreNoivos extends Entity
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
     * @ORM\OneToOne(targetEntity="Casamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="casamento_id", referencedColumnName="id")
     * })
     */
    private $casamento;

    /**
     * @var \Foto
     * @ORM\OneToOne(targetEntity="Foto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="foto_id", referencedColumnName="id")
     * })
     */
    private $foto;
    
    /**
     * @var \Video
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

    public function setCasamento(Casamento $casamento) {
        $this->casamento = $casamento;
    }

    public function setFoto(Foto $foto) {
        $this->foto = $foto;
    }

    public function setVideo(Video $video) {
        $this->video = $video;
    }



}

