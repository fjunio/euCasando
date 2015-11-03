<?php

namespace Pagamento\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItemCompra
 *
 * @ORM\Table(name="item_compra", indexes={@ORM\Index(name="fk_Item_Compra_Compra1_idx", columns={"Compra_id"})})
 * @ORM\Entity
 */
class ItemCompra extends Application\Entity\Base\Entity
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
     * @ORM\Column(name="descricao", type="string", length=45, nullable=false)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade", type="decimal", precision=3, scale=2, nullable=false)
     */
    private $quantidade;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_unitario", type="decimal", precision=3, scale=2, nullable=false)
     */
    private $valorUnitario;

    /**
     * @var \Compra
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Compra")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Compra_id", referencedColumnName="id")
     * })
     */
    private $compra;
    
    public function getDescricao() {
        return $this->descricao;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function getValorUnitario() {
        return $this->valorUnitario;
    }

    public function getCompra() {
        return $this->compra;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    public function setValorUnitario($valorUnitario) {
        $this->valorUnitario = $valorUnitario;
    }

    public function setCompra(\Compra $compra) {
        $this->compra = $compra;
    }




}

