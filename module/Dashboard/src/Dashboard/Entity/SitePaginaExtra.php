<?php

namespace Dashboard\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SitePaginaExtra
 *
 * @ORM\Table(name="site_pagina_extra", indexes={@ORM\Index(name="fk_Cliente_Paginas_Extras_Cliente1_idx", columns={"casamento_id"})})
 * @ORM\Entity
 */
class SitePaginaExtra extends Application\Entity\Base\Entity
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
     * @ORM\Column(name="texto", type="text", length=65535, nullable=true)
     */
    private $texto;

    /**
     * @var string
     *
     * @ORM\Column(name="caminho_foto", type="string", length=45, nullable=true)
     */
    private $caminhoFoto;

    /**
     * @var \Casamento
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Casamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="casamento_id", referencedColumnName="id")
     * })
     */
    private $casamento;
    
    public function getTexto() {
        return $this->texto;
    }

    public function getCaminhoFoto() {
        return $this->caminhoFoto;
    }

    public function getCasamento() {
        return $this->casamento;
    }

    public function setTexto($texto) {
        $this->texto = $texto;
    }

    public function setCaminhoFoto($caminhoFoto) {
        $this->caminhoFoto = $caminhoFoto;
    }

    public function setCasamento(\Casamento $casamento) {
        $this->casamento = $casamento;
    }




}

