<?php

namespace Dashboard\Entity;

use Application\Entity\Base\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Padrinho
 *
 * @ORM\Table(name="padrinho")
 * @ORM\Entity
 */
class Padrinho extends Entity
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
     * @ORM\Column(name="nome", type="string", length=100, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="text", length=65535, nullable=true)
     */
    private $descricao;

    /**
     * @var \Foto
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Foto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="foto_id", referencedColumnName="id")
     * })
     */
    private $foto;

    /**
     * @var \PaginaPadrinho
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\ManyToOne(targetEntity="PaginaPadrinho", inversedBy="padrinho")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pagina_padrinho_id", referencedColumnName="id")
     * })
     */
    private $paginaPadrinho;
    
    public function getNome() {
        return $this->nome;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getFoto() {
        return $this->foto;
    }

    public function getPaginaPadrinho() {
        return $this->paginaPadrinho;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setFoto(Foto $foto) {
        $this->foto = $foto;
    }

    public function setPaginaPadrinho(PaginaPadrinho $paginaPadrinho) {
        $this->paginaPadrinho = $paginaPadrinho;
    }


}

