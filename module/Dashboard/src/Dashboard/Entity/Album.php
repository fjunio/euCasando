<?php

namespace Dashboard\Entity;

use Doctrine\ORM\Mapping as ORM;
use Application\Entity\Base\Entity;


/**
 * Album
 *
 * @ORM\Table(name="album", indexes={@ORM\Index(name="fk_Album_Pagina_Foto1_idx", columns={"Pagina_Fotos_id"})})
 * @ORM\Entity
 */
class Album extends Entity
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
     * @ORM\Column(name="caminho_foto_capa", type="string", length=45, nullable=true)
     */
    private $caminhoFotoCapa;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_album", type="string", length=45, nullable=true)
     */
    private $nomeAlbum;

    /**
     * @var \PaginaFotos
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\ManyToOne(targetEntity="PaginaFotos", inversedBy="album")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Pagina_Fotos_id", referencedColumnName="id")
     * })
     */
    private $paginaFotos;
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Foto", mappedBy="album")
     * @ORM\JoinTable(name="Album_Foto",
     *   joinColumns={
     *     @ORM\JoinColumn(name="album_id", referencedColumnName="id")
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
    
    public function getFoto() {
        return $this->foto;
    }

    public function setFoto(\Doctrine\Common\Collections\Collection $foto) {
        $this->foto = $foto;
    }

        
    public function getCaminhoFotoCapa() {
        return $this->caminhoFotoCapa;
    }

    public function getNomeAlbum() {
        return $this->nomeAlbum;
    }

    public function getPaginaFotos() {
        return $this->paginaFotos;
    }

    public function setCaminhoFotoCapa($caminhoFotoCapa) {
        $this->caminhoFotoCapa = $caminhoFotoCapa;
    }

    public function setNomeAlbum($nomeAlbum) {
        $this->nomeAlbum = $nomeAlbum;
    }

    public function setPaginaFotos(\PaginaFotos $paginaFotos) {
        $this->paginaFotos = $paginaFotos;
    }




}

