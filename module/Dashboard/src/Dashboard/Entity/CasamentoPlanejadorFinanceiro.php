<?php

namespace Dashboard\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CasamentoPlanejadorFinanceiro
 *
 * @ORM\Table(name="casamento_planejador_financeiro", indexes={@ORM\Index(name="fk_table1_Cliente5", columns={"casamento_id"})})
 * @ORM\Entity
 */
class CasamentoPlanejadorFinanceiro extends Application\Entity\Base\Entity
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
     * @ORM\Column(name="descricao", type="string", length=50, nullable=false)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="categoria", type="string", length=10, nullable=true)
     */
    private $categoria;

    /**
     * @var string
     *
     * @ORM\Column(name="valor", type="decimal", precision=3, scale=2, nullable=false)
     */
    private $valor;

    /**
     * @var boolean
     *
     * @ORM\Column(name="compensado", type="boolean", nullable=false)
     */
    private $compensado;

    /**
     * @var string
     *
     * @ORM\Column(name="quem_pagou", type="string", length=10, nullable=true)
     */
    private $quemPagou;

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

    public function getCasamento() {
        return $this->casamento;
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

    public function setCasamento(\Casamento $casamento) {
        $this->casamento = $casamento;
    }



}

