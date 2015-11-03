<?php

namespace Dashboard\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CronogramaPadrao
 *
 * @ORM\Table(name="cronograma_padrao")
 * @ORM\Entity
 */
class CronogramaPadrao extends Application\Entity\Base\Entity
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
     * @ORM\Column(name="periodo", type="integer", nullable=false)
     */
    private $periodo;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=45, nullable=false)
     */
    private $descricao;
    
    public function getPeriodo() {
        return $this->periodo;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setPeriodo($periodo) {
        $this->periodo = $periodo;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }




}

