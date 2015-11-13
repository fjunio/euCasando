<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;
use Application\Entity\Base\Entity as EntityPagina;

/**
 * Pagina
 *
 * @ORM\Table(name="pagina", indexes={@ORM\Index(name="fk_Pagina_Site1_idx", columns={"Site_id"})})
 * @ORM\Entity
 */
class Pagina extends EntityPagina
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
     * @ORM\Column(name="nome_pagina", type="string", length=45, nullable=true)
     */
    private $nomePagina;

    /**
     * @var integer
     *
     * @ORM\Column(name="ordem", type="integer", nullable=true)
     */
    private $ordem;

    /**
     * @var boolean
     *
     * @ORM\Column(name="publicar_pagina", type="boolean", nullable=true)
     */
    private $publicarPagina;

    /**
     * @var \Site
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Site")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Site_id", referencedColumnName="id")
     * })
     */
    private $site;
    
    public function getNomePagina() {
        return $this->nomePagina;
    }

    public function getOrdem() {
        return $this->ordem;
    }

    public function getPublicarPagina() {
        return $this->publicarPagina;
    }

    public function getSite() {
        return $this->site;
    }

    public function setNomePagina($nomePagina) {
        $this->nomePagina = $nomePagina;
    }

    public function setOrdem($ordem) {
        $this->ordem = $ordem;
    }

    public function setPublicarPagina($publicarPagina) {
        $this->publicarPagina = $publicarPagina;
    }

    public function setSite(\Site $site) {
        $this->site = $site;
    }




}

