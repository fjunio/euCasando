<?php

namespace Pagamento\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Compra
 *
 * @ORM\Table(name="compra", indexes={@ORM\Index(name="fk_Compra_Pessoa1_idx", columns={"Pessoa_id"}), @ORM\Index(name="fk_Compra_Casamento1_idx", columns={"Casamento_id"})})
 * @ORM\Entity
 */
class Compra extends Application\Entity\Base\Entity
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
     * @ORM\Column(name="idTransacao", type="string", length=36, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idtransacao;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo_pagamento", type="integer", nullable=false)
     */
    private $tipoPagamento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_compra", type="datetime", nullable=false)
     */
    private $dataCompra;

    /**
     * @var integer
     *
     * @ORM\Column(name="status_pagamento", type="integer", nullable=false)
     */
    private $statusPagamento;

    /**
     * @var integer
     *
     * @ORM\Column(name="forma_pagamento", type="integer", nullable=false)
     */
    private $formaPagamento;

    /**
     * @var \Pessoa
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Pessoa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Pessoa_id", referencedColumnName="id")
     * })
     */
    private $pessoa;

    /**
     * @var \Casamento
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Casamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Casamento_id", referencedColumnName="id")
     * })
     */
    private $casamento;
    
    public function getIdtransacao() {
        return $this->idtransacao;
    }

    public function getTipoPagamento() {
        return $this->tipoPagamento;
    }

    public function getDataCompra() {
        return $this->dataCompra;
    }

    public function getStatusPagamento() {
        return $this->statusPagamento;
    }

    public function getFormaPagamento() {
        return $this->formaPagamento;
    }

    public function getPessoa() {
        return $this->pessoa;
    }

    public function getCasamento() {
        return $this->casamento;
    }

    public function setIdtransacao($idtransacao) {
        $this->idtransacao = $idtransacao;
    }

    public function setTipoPagamento($tipoPagamento) {
        $this->tipoPagamento = $tipoPagamento;
    }

    public function setDataCompra(\DateTime $dataCompra) {
        $this->dataCompra = $dataCompra;
    }

    public function setStatusPagamento($statusPagamento) {
        $this->statusPagamento = $statusPagamento;
    }

    public function setFormaPagamento($formaPagamento) {
        $this->formaPagamento = $formaPagamento;
    }

    public function setPessoa(\Pessoa $pessoa) {
        $this->pessoa = $pessoa;
    }

    public function setCasamento(\Casamento $casamento) {
        $this->casamento = $casamento;
    }




}

