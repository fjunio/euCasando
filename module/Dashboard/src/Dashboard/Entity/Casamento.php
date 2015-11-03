<?php

namespace Dashboard\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Casamento
 *
 * @ORM\Table(name="casamento")
 * @ORM\Entity
 */
class Casamento extends Application\Entity\Base\Entity
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
     * @ORM\Column(name="noiva_id", type="integer", nullable=false)
     */
    private $noivaId;

    /**
     * @var integer
     *
     * @ORM\Column(name="noivo_id", type="integer", nullable=false)
     */
    private $noivoId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_casamento", type="date", nullable=false)
     */
    private $dataCasamento;

    /**
     * @var boolean
     *
     * @ORM\Column(name="casamento_hetero", type="boolean", nullable=true)
     */
    private $casamentoHetero = '1';

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Plano", inversedBy="casamento")
     * @ORM\JoinTable(name="casamento_plano",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Casamento_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Plano_id", referencedColumnName="id")
     *   }
     * )
     */
    private $plano;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Servico", inversedBy="casamento")
     * @ORM\JoinTable(name="casamento_servico",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Casamento_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Servico_id", referencedColumnName="id")
     *   }
     * )
     */
    private $servico;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Usuario", mappedBy="casamento")
     * @ORM\JoinTable(name="usuario_casamento",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Casamento_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     *   }
     * )
     */
    private $usuario;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->plano = new \Doctrine\Common\Collections\ArrayCollection();
        $this->servico = new \Doctrine\Common\Collections\ArrayCollection();
        $this->usuario = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    public function getNoivaId() {
        return $this->noivaId;
    }

    public function getNoivoId() {
        return $this->noivoId;
    }

    public function getDataCasamento() {
        return $this->dataCasamento;
    }

    public function getCasamentoHetero() {
        return $this->casamentoHetero;
    }

    public function getPlano() {
        return $this->plano;
    }

    public function getServico() {
        return $this->servico;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function setNoivaId($noivaId) {
        $this->noivaId = $noivaId;
    }

    public function setNoivoId($noivoId) {
        $this->noivoId = $noivoId;
    }

    public function setDataCasamento(\DateTime $dataCasamento) {
        $this->dataCasamento = $dataCasamento;
    }

    public function setCasamentoHetero($casamentoHetero) {
        $this->casamentoHetero = $casamentoHetero;
    }

    public function setPlano(\Doctrine\Common\Collections\Collection $plano) {
        $this->plano = $plano;
    }

    public function setServico(\Doctrine\Common\Collections\Collection $servico) {
        $this->servico = $servico;
    }

    public function setUsuario(\Doctrine\Common\Collections\Collection $usuario) {
        $this->usuario = $usuario;
    }



}

