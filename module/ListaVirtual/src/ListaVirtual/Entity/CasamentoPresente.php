<?php

namespace ListaVirtual\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CasamentoPresente
 *
 * @ORM\Table(name="casamento_presente", indexes={@ORM\Index(name="fk_Casamento_Presente_Categoria_Presente1_idx", columns={"Categoria_Presente_id"}), @ORM\Index(name="fk_Casamento_Presente_Casamento1_idx", columns={"Casamento_id"})})
 * @ORM\Entity
 */
class CasamentoPresente extends Application\Entity\Base\Entity
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
     * @var string
     *
     * @ORM\Column(name="qtde_requerida", type="decimal", precision=3, scale=2, nullable=false)
     */
    private $qtdeRequerida = '1.00';

    /**
     * @var string
     *
     * @ORM\Column(name="qtde_disponivel", type="string", length=45, nullable=true)
     */
    private $qtdeDisponivel;

    /**
     * @var \CategoriaPresente
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="CategoriaPresente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Categoria_Presente_id", referencedColumnName="id")
     * })
     */
    private $categoriaPresente;

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

    public function getCaminhoFoto() {
        return $this->caminhoFoto;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getValor() {
        return $this->valor;
    }

    public function getQtdeRequerida() {
        return $this->qtdeRequerida;
    }

    public function getQtdeDisponivel() {
        return $this->qtdeDisponivel;
    }

    public function getCategoriaPresente() {
        return $this->categoriaPresente;
    }

    public function getCasamento() {
        return $this->casamento;
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

    public function setQtdeRequerida($qtdeRequerida) {
        $this->qtdeRequerida = $qtdeRequerida;
    }

    public function setQtdeDisponivel($qtdeDisponivel) {
        $this->qtdeDisponivel = $qtdeDisponivel;
    }

    public function setCategoriaPresente(\CategoriaPresente $categoriaPresente) {
        $this->categoriaPresente = $categoriaPresente;
    }

    public function setCasamento(\Casamento $casamento) {
        $this->casamento = $casamento;
    }



}

