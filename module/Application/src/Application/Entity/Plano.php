<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;
use Application\Entity\Base\Entity as EntityPlano;
use Application\Entity;

/**
 * Plano
 *
 * @ORM\Table(name="plano")
 * @ORM\Entity
 */
class Plano extends  EntityPlano
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
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=45, nullable=false)
     */
    private $descricao;

    /**
     * @var integer
     *
     * @ORM\Column(name="prazo_dias", type="integer", nullable=true)
     */
    private $prazoDias;

    /**
     * @var string
     *
     * @ORM\Column(name="preco", type="decimal", precision=3, scale=2, nullable=true)
     */
    private $preco;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="\Dashboard\Entity\Casamento", mappedBy="plano")
     * @ORM\JoinTable(name="casamento_plano",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Plano_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Casamento_id", referencedColumnName="id")
     *   }
     * )
     */
    private $casamento;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Servico", mappedBy="plano")
     * @ORM\JoinTable(name="Servico_Plano",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Plano_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Servico_id", referencedColumnName="id")
     *   }
     * )
     */
    private $servico;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->casamento = new \Doctrine\Common\Collections\ArrayCollection();
        $this->servico = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    public function getDescricao() {
        return $this->descricao;
    }

    public function getPrazoDias() {
        return $this->prazoDias;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function getCasamento() {
        return $this->casamento;
    }

    public function getServico() {
        return $this->servico;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setPrazoDias($prazoDias) {
        $this->prazoDias = $prazoDias;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function setCasamento(\Doctrine\Common\Collections\Collection $casamento) {
        $this->casamento = $casamento;
    }

    public function setServico(\Doctrine\Common\Collections\Collection $servico) {
        $this->servico = $servico;
    }



}

