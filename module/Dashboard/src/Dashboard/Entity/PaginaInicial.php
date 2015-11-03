<?php

namespace Dashboard\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaginaInicial
 *
 * @ORM\Table(name="pagina_inicial", indexes={@ORM\Index(name="fk_Pagina_inicial_Cliente1", columns={"casamento_id"})})
 * @ORM\Entity
 */
class PaginaInicial extends Application\Entity\Base\Entity
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
     * @ORM\Column(name="caminho_foto1", type="string", length=45, nullable=true)
     */
    private $caminhoFoto1;

    /**
     * @var string
     *
     * @ORM\Column(name="caminho_foto2", type="string", length=45, nullable=true)
     */
    private $caminhoFoto2;

    /**
     * @var string
     *
     * @ORM\Column(name="caminho_foto3", type="string", length=45, nullable=true)
     */
    private $caminhoFoto3;

    /**
     * @var string
     *
     * @ORM\Column(name="caminho_foto4", type="string", length=45, nullable=true)
     */
    private $caminhoFoto4;

    /**
     * @var string
     *
     * @ORM\Column(name="caminho_foto5", type="string", length=45, nullable=true)
     */
    private $caminhoFoto5;

    /**
     * @var string
     *
     * @ORM\Column(name="caminho_video", type="string", length=45, nullable=true)
     */
    private $caminhoVideo;

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

    public function getCaminhoFoto1() {
        return $this->caminhoFoto1;
    }

    public function getCaminhoFoto2() {
        return $this->caminhoFoto2;
    }

    public function getCaminhoFoto3() {
        return $this->caminhoFoto3;
    }

    public function getCaminhoFoto4() {
        return $this->caminhoFoto4;
    }

    public function getCaminhoFoto5() {
        return $this->caminhoFoto5;
    }

    public function getCaminhoVideo() {
        return $this->caminhoVideo;
    }

    public function getCasamento() {
        return $this->casamento;
    }

    public function setTexto($texto) {
        $this->texto = $texto;
    }

    public function setCaminhoFoto1($caminhoFoto1) {
        $this->caminhoFoto1 = $caminhoFoto1;
    }

    public function setCaminhoFoto2($caminhoFoto2) {
        $this->caminhoFoto2 = $caminhoFoto2;
    }

    public function setCaminhoFoto3($caminhoFoto3) {
        $this->caminhoFoto3 = $caminhoFoto3;
    }

    public function setCaminhoFoto4($caminhoFoto4) {
        $this->caminhoFoto4 = $caminhoFoto4;
    }

    public function setCaminhoFoto5($caminhoFoto5) {
        $this->caminhoFoto5 = $caminhoFoto5;
    }

    public function setCaminhoVideo($caminhoVideo) {
        $this->caminhoVideo = $caminhoVideo;
    }

    public function setCasamento(\Casamento $casamento) {
        $this->casamento = $casamento;
    }




}

