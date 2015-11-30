<?php

namespace Dashboard\VO;

/**
 * Description of PadrinhoVO
 *
 * @author francis.oliveira
 */
class PadrinhoVO {
    
    private $id;
    
    private $idPaginaPadrinho;
    
    private $foto;
    
    private $nome;
    
    private $descricao;
    
    public function getId() {
        return $this->id;
    }

    public function getIdPaginaPadrinho() {
        return $this->idPaginaPadrinho;
    }

    public function getFoto() {
        return $this->foto;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setIdPaginaPadrinho($idPaginaPadrinho) {
        $this->idPaginaPadrinho = $idPaginaPadrinho;
    }

    public function setFoto(FotoVO $foto) {
        $this->foto = $foto;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }


}
