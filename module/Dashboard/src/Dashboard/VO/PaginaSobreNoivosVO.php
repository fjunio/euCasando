<?php

namespace Dashboard\VO;

/**
 * Description of PaginaSobreNoivosVO
 *
 * @author francis.oliveira
 */
class PaginaSobreNoivosVO {
    
    private $id;
    
    private $texto;
    
    private $casamentoId;
    
    private $fotoVo;
    
    private $videoVo;
    
    private $publicarPagina;
    
    public function getId() {
        return $this->id;
    }

    public function getTexto() {
        return $this->texto;
    }

    public function getCasamentoId() {
        return $this->casamentoId;
    }

    public function getFotoVo() {
        return $this->fotoVo;
    }

    public function getVideoVo() {
        return $this->videoVo;
    }

    public function getPublicarPagina() {
        return $this->publicarPagina;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTexto($texto) {
        $this->texto = $texto;
    }

    public function setCasamentoId($casamentoId) {
        $this->casamentoId = $casamentoId;
    }

    public function setFotoVo($fotoVo) {
        $this->fotoVo = $fotoVo;
    }

    public function setVideoVo($videoVo) {
        $this->videoVo = $videoVo;
    }

    public function setPublicarPagina($publicarPagina) {
        $this->publicarPagina = $publicarPagina;
    }


}
