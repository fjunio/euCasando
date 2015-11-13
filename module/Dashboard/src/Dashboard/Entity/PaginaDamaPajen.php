<?php

namespace Dashboard\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaginaDamaPajen
 *
 * @ORM\Table(name="pagina_dama_pajen", indexes={@ORM\Index(name="fk_table1_Cliente1", columns={"casamento_id"})})
 * @ORM\Entity
 */
class PaginaDamaPajen extends Application\Entity\Base\Entity
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
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Foto", mappedBy="paginaDamaPajen")
     * @ORM\JoinTable(name="Pagina_Dama_Pajen_Foto",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Pagina_Dama_Pajen__id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="foto_id", referencedColumnName="id")
     *   }
     * )
     */    
    private $foto;
    
    
    public function __construct() {
        $this->foto = new \Doctrine\Common\Collections\ArrayCollection();
    }    
    
    public function getFoto() {
        return $this->foto;
    }

    public function setFoto(\Doctrine\Common\Collections\Collection $foto) {
        $this->foto = $foto;
    }

        public function getTexto() {
        return $this->texto;
    }

    public function getCasamento() {
        return $this->casamento;
    }

    public function setTexto($texto) {
        $this->texto = $texto;
    }

    public function setCasamento(\Casamento $casamento) {
        $this->casamento = $casamento;
    }




}

