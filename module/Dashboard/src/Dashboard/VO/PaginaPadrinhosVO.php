<?php

namespace Dashboard\VO;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Description of PaginaPadrinhosVO
 *
 * @author francis.oliveira
 */
class PaginaPadrinhosVO {
    
    private $id;
    
    private $idCasamento;
    
    private $texto;
    
    private $padrinhos;
    
    private $publicarPagina;
    
    public function __construct() {
        $this->padrinhos = new ArrayCollection();
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

    public function setId($id) {
        $this->id = $id;
    }

    public function setIdCasamento($idCasamento) {
        $this->idCasamento = $idCasamento;
    }

    public function setTexto($texto) {
        $this->texto = $texto;
    }
    
    public function addPadrinho(PadrinhoVO $padrinho){
        $this->padrinhos->add($padrinho);
    }

    public function removePadrinho(PadrinhoVO $padrinho){
        $this->padrinhos->remove($padrinho);
    }

    public function getPublicarPagina() {
        return $this->publicarPagina;
    }

    public function setPublicarPagina($publicarPagina) {
        $this->publicarPagina = $publicarPagina;
    }

}
