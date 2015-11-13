<?php

namespace Dashboard\VO;

/**
 * Description of PlanejadorFinanceiroVO
 *
 * @author francis.oliveira
 */
class PlanejadorFinanceiroVO {
    
    /**
     *
     * @var integer
     */
    private $id;
    
    /**
     *
     * @var type string
     */
    private $descricao;
    
    /**
     *
     * @var type string
     */
    private $categoria;
    
    /**
     *
     * @var type decimal
     */
    private $valor;
    
    /**
     *
     * @var type bool
     */
    private $compensado;
    
    /**
     *
     * @var type string
     */
    private $quemPagou;
    
    /**
     *
     * @var type integer
     */
    private $idCasamento;
    
    public function getId() {
        return $this->id;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getValor() {
        return $this->valor;
    }

    public function getCompensado() {
        return $this->compensado;
    }

    public function getQuemPagou() {
        return $this->quemPagou;
    }

    public function getIdCasamento() {
        return $this->idCasamento;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function setCompensado($compensado) {
        $this->compensado = $compensado;
    }

    public function setQuemPagou($quemPagou) {
        $this->quemPagou = $quemPagou;
    }

    public function setIdCasamento($idCasamento) {
        $this->idCasamento = $idCasamento;
    }


}
