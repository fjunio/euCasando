<?php

namespace ListaVirtual\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Presente
 *
 * @ORM\Table(name="presente", indexes={@ORM\Index(name="fk_Presente_Categoria_Presente1_idx", columns={"categoria_presente_id"})})
 * @ORM\Entity
 */
class Presente extends Application\Entity\Base\Entity
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
     * @ORM\Column(name="caminho_foto", type="string", length=45, nullable=true)
     */
    private $caminhoFoto;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=45, nullable=false)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="valor", type="decimal", precision=3, scale=2, nullable=false)
     */
    private $valor;

    /**
     * @var \CategoriaPresente
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="CategoriaPresente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categoria_presente_id", referencedColumnName="id")
     * })
     */
    private $categoriaPresente;
    
    public function getCaminhoFoto() {
        return $this->caminhoFoto;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getValor() {
        return $this->valor;
    }

    public function getCategoriaPresente() {
        return $this->categoriaPresente;
    }

    public function setCaminhoFoto($caminhoFoto) {
        $this->caminhoFoto = $caminhoFoto;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function setCategoriaPresente(\CategoriaPresente $categoriaPresente) {
        $this->categoriaPresente = $categoriaPresente;
    }




}

