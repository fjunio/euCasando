<?php

namespace Dashboard\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DamaPajen
 *
 * @ORM\Table(name="dama_pajen", indexes={@ORM\Index(name="fk_Dama_Pajen_Pagina_Dama_Pajen1_idx", columns={"pagina_dama_pajen_id"})})
 * @ORM\Entity
 */
class DamaPajen extends Application\Entity\Base\Entity
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
     * @var string
     *
     * @ORM\Column(name="caminho_foto", type="string", length=45, nullable=true)
     */
    private $caminhoFoto;

    /**
     * @var \PaginaDamaPajen
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="PaginaDamaPajen")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pagina_dama_pajen_id", referencedColumnName="id")
     * })
     */
    private $paginaDamaPajen;

    public function getNome() {
        return $this->nome;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getCaminhoFoto() {
        return $this->caminhoFoto;
    }

    public function getPaginaDamaPajen() {
        return $this->paginaDamaPajen;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setCaminhoFoto($caminhoFoto) {
        $this->caminhoFoto = $caminhoFoto;
    }

    public function setPaginaDamaPajen(\PaginaDamaPajen $paginaDamaPajen) {
        $this->paginaDamaPajen = $paginaDamaPajen;
    }



}

