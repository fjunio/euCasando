<?php

use Dashboard\VO\FotoVO;
use Dashboard\VO\VideoVO;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Description of PaginaFiliacaoVO
 *
 * @author francis.oliveira
 */
class PaginaFiliacaoVO {
    
    /**
     *
     * @var type integer
     */
    private $id;
    
    /**
     *
     * @var type integer
     */
    private $idCasamento;
    
    /**
     *
     * @var type string
     */
    private $texto;
    
    /**
     *
     * @var type Video
     */
    private $video;
    
    /**
     *
     * @var type Foto
     */
    private $fotos;
    
    /**
     *
     * @var type boolean
     */
    private $publicarPagina;
    
    public function __construct() {
        $this->fotos = new ArrayCollection();
    }
    
    public function getId() {
        return $this->id;
    }

    public function getIdCasamento() {
        return $this->idCasamento;
    }

    public function getTexto() {
        return $this->texto;
    }

    public function getVideo() {
        return $this->video;
    }

    public function getFotos() {
        return $this->fotos;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setIdCasamento($idCasamento) {
        $this->idCasamento = $idCasamento;
    }

    public function setTexto($texto) {
        $this->texto = $texto;
    }

    public function setVideo(VideoVO $video) {
        $this->video = $video;
    }

    public function addFoto(FotoVO $foto) {
        $this->fotos->add($foto);
    }
    
    public function removeFoto(FotoVO $foto){
        $this->fotos->remove($foto);
    }
    
    public function getPublicarPagina() {
        return $this->publicarPagina;
    }

    public function setPublicarPagina($publicarPagina) {
        $this->publicarPagina = $publicarPagina;
    }


}
