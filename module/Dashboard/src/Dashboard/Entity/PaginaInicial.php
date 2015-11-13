<?php

namespace Dashboard\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaginaInicial
 *
 * @ORM\Table(name="pagina_inicial", indexes={@ORM\Index(name="fk_Pagina_inicial_Cliente1", columns={"casamento_id"})})
 * @ORM\Entity
 */
class PaginaInicial extends Application\Entity\Base\Entity
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
     * @var string
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Video")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="video_id", referencedColumnName="id")
     * })
     */
    private $video;

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Foto", mappedBy="paginaInicial")
     * @ORM\JoinTable(name="Pagina_Inicial_Foto",
     *   joinColumns={
     *     @ORM\JoinColumn(name="pagina_inicial_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="foto_id", referencedColumnName="id")
     *   }
     * )
     */    
    private $foto;
    
    
    public function __construct() {
        $this->foto = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    public function getTexto() {
        return $this->texto;
    }

    public function getVideo() {
        return $this->video;
    }

    public function getCasamento() {
        return $this->casamento;
    }

    public function getFoto() {
        return $this->foto;
    }

    public function setTexto($texto) {
        $this->texto = $texto;
    }

    public function setVideo($video) {
        $this->video = $video;
    }

    public function setCasamento(\Casamento $casamento) {
        $this->casamento = $casamento;
    }

    public function setFoto(\Doctrine\Common\Collections\Collection $foto) {
        $this->foto = $foto;
    }


    
    
}

