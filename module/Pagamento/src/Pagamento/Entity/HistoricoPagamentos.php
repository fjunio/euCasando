<?php

namespace Pagamento\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HistoricoPagamentos
 *
 * @ORM\Table(name="historico_pagamentos")
 * @ORM\Entity
 */
class HistoricoPagamentos extends Application\Entity\Base\Entity
{
//    /**
//     * @var integer
//     *
//     * @ORM\Column(name="id", type="integer", nullable=false)
//     * @ORM\Id
//     * @ORM\GeneratedValue(strategy="IDENTITY")
//     */
//    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="idTransacao", type="integer", nullable=false)
     */
    private $idtransacao;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=45, nullable=false)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="date", nullable=false)
     */
    private $data;
    
    public function getIdtransacao() {
        return $this->idtransacao;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getData() {
        return $this->data;
    }

    public function setIdtransacao($idtransacao) {
        $this->idtransacao = $idtransacao;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function setData(\DateTime $data) {
        $this->data = $data;
    }




}

