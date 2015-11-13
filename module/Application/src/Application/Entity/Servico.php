<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;
use Application\Entity\Base\Entity as EntityServico;

/**
 * Servico
 *
 * @ORM\Table(name="servico")
 * @ORM\Entity
 */
class Servico extends EntityServico
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
     * @var boolean
     *
     * @ORM\Column(name="ativo", type="boolean", nullable=true)
     */
    private $ativo = '1';

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="\Dashboard\Entity\Casamento", mappedBy="servico")
     * @ORM\JoinTable(name="casamento_servico",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Servico_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="casamento_id", referencedColumnName="id")
     *   }
     * )
     */
    private $casamento;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Plano", inversedBy="servico")
     * @ORM\JoinTable(name="servico_plano",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Servico_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Plano_id", referencedColumnName="id")
     *   }
     * )
     */
    private $plano;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->casamento = new \Doctrine\Common\Collections\ArrayCollection();
        $this->plano = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    public function getDescricao() {
        return $this->descricao;
    }

    public function getAtivo() {
        return $this->ativo;
    }

    public function getCasamento() {
        return $this->casamento;
    }

    public function getPlano() {
        return $this->plano;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setAtivo($ativo) {
        $this->ativo = $ativo;
    }

    public function setCasamento(\Doctrine\Common\Collections\Collection $casamento) {
        $this->casamento = $casamento;
    }

    public function setPlano(\Doctrine\Common\Collections\Collection $plano) {
        $this->plano = $plano;
    }



}

