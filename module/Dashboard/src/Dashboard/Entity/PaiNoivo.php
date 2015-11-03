<?php

namespace Dashboard\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaiNoivo
 *
 * @ORM\Table(name="pai_noivo", indexes={@ORM\Index(name="fk_Pais_Noivos_Cliente1", columns={"idCliente"})})
 * @ORM\Entity
 */
class PaiNoivo extends Application\Entity\Base\Entity
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
     * @ORM\Column(name="nome_pagina", type="string", length=20, nullable=true)
     */
    private $nomePagina;

    /**
     * @var string
     *
     * @ORM\Column(name="foto_1", type="string", length=45, nullable=true)
     */
    private $foto1;

    /**
     * @var string
     *
     * @ORM\Column(name="foto_2", type="string", length=45, nullable=true)
     */
    private $foto2;

    /**
     * @var string
     *
     * @ORM\Column(name="texto", type="text", length=65535, nullable=true)
     */
    private $texto;

    /**
     * @var \Casamento
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Casamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCliente", referencedColumnName="id")
     * })
     */
    private $idcliente;
    
    public function getNomePagina() {
        return $this->nomePagina;
    }

    public function getFoto1() {
        return $this->foto1;
    }

    public function getFoto2() {
        return $this->foto2;
    }

    public function getTexto() {
        return $this->texto;
    }

    public function getIdcliente() {
        return $this->idcliente;
    }

    public function setNomePagina($nomePagina) {
        $this->nomePagina = $nomePagina;
    }

    public function setFoto1($foto1) {
        $this->foto1 = $foto1;
    }

    public function setFoto2($foto2) {
        $this->foto2 = $foto2;
    }

    public function setTexto($texto) {
        $this->texto = $texto;
    }

    public function setIdcliente(\Casamento $idcliente) {
        $this->idcliente = $idcliente;
    }




}

