<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ParametrosSistema
 *
 * @ORM\Table(name="parametro_sistema")
 * @ORM\Entity
 */
class ParametroSistema extends Application\Entity\Base\Entity
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
     * @ORM\Column(name="chave", type="string", length=50, nullable=false)
     */
    private $chave;

    /**
     * @var string
     *
     * @ORM\Column(name="valor", type="string", length=100, nullable=true)
     */
    private $valor;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=45, nullable=true)
     */
    private $descricao;
    
    public function getChave() {
        return $this->chave;
    }

    public function getValor() {
        return $this->valor;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setChave($chave) {
        $this->chave = $chave;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }




}

