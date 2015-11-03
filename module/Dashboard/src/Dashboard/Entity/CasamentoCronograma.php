<?php

namespace Dashboard\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CasamentoCronograma
 *
 * @ORM\Table(name="casamento_cronograma", indexes={@ORM\Index(name="fk_Cliente_atividades_Cliente1_idx", columns={"casamento_id"})})
 * @ORM\Entity
 */
class CasamentoCronograma extends Application\Entity\Base\Entity
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
     * @var integer
     *
     * @ORM\Column(name="periodo", type="integer", nullable=false)
     */
    private $periodo;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=45, nullable=false)
     */
    private $descricao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_execucao", type="date", nullable=true)
     */
    private $dataExecucao;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="string", length=100, nullable=true)
     */
    private $observacao;

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
    
    public function getPeriodo() {
        return $this->periodo;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getDataExecucao() {
        return $this->dataExecucao;
    }

    public function getObservacao() {
        return $this->observacao;
    }

    public function getCasamento() {
        return $this->casamento;
    }

    public function setPeriodo($periodo) {
        $this->periodo = $periodo;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setDataExecucao(\DateTime $dataExecucao) {
        $this->dataExecucao = $dataExecucao;
    }

    public function setObservacao($observacao) {
        $this->observacao = $observacao;
    }

    public function setCasamento(\Casamento $casamento) {
        $this->casamento = $casamento;
    }




}

