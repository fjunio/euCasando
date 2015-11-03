<?php

namespace Dashboard\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FotoAlbum
 *
 * @ORM\Table(name="foto_album", indexes={@ORM\Index(name="fk_Fotos_Album_Album1_idx", columns={"Album_id"})})
 * @ORM\Entity
 */
class FotoAlbum extends Application\Entity\Base\Entity
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
     * @ORM\Column(name="caminho_foto", type="string", length=45, nullable=false)
     */
    private $caminhoFoto;

    /**
     * @var string
     *
     * @ORM\Column(name="legenda_foto", type="string", length=45, nullable=true)
     */
    private $legendaFoto;

    /**
     * @var \Album
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Album")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Album_id", referencedColumnName="id")
     * })
     */
    private $album;
    
    public function getCaminhoFoto() {
        return $this->caminhoFoto;
    }

    public function getLegendaFoto() {
        return $this->legendaFoto;
    }

    public function getAlbum() {
        return $this->album;
    }

    public function setCaminhoFoto($caminhoFoto) {
        $this->caminhoFoto = $caminhoFoto;
    }

    public function setLegendaFoto($legendaFoto) {
        $this->legendaFoto = $legendaFoto;
    }

    public function setAlbum(\Album $album) {
        $this->album = $album;
    }




}

