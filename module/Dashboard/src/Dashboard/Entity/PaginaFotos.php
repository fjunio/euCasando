<?php

namespace Dashboard\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaginaFotos
 *
 * @ORM\Table(name="pagina_fotos", indexes={@ORM\Index(name="fk_Fotos_Cliente1", columns={"casamento_id"})})
 * @ORM\Entity
 */
class PaginaFotos extends Application\Entity\Base\Entity
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
    
    /*
     * @var \Album
     * 
     * @ORM\Id
     * @ORM\OneToMany(targetEntity="Album", mappedBy="paginaFotos")
     */
    private $album;
    
    public function __construct() {
        $this->album = new \Doctrine\Common\Collections\ArrayCollection();
    } 
    
    public function getAlbum() {
        return $this->album;
    }

    public function setAlbum($album) {
        $this->album = $album;
    }

        
    public function getTexto() {
        return $this->texto;
    }

    public function getCasamento() {
        return $this->casamento;
    }

    public function setTexto($texto) {
        $this->texto = $texto;
    }

    public function setCasamento(\Casamento $casamento) {
        $this->casamento = $casamento;
    }




}

