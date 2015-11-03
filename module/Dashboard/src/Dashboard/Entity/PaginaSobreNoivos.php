<?php

namespace Dashboard\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaginaSobreNoivos
 *
 * @ORM\Table(name="pagina_sobre_noivos", indexes={@ORM\Index(name="fk_Sobre_noivos_Cliente1", columns={"casamento_id"})})
 * @ORM\Entity
 */
class PaginaSobreNoivos extends Application\Entity\Base\Entity
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
     * @ORM\Column(name="texto_capa", type="text", length=65535, nullable=true)
     */
    private $textoCapa;

    /**
     * @var string
     *
     * @ORM\Column(name="caminho_imagem", type="string", length=45, nullable=true)
     */
    private $caminhoImagem;

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
    
    public function getTextoCapa() {
        return $this->textoCapa;
    }

    public function getCaminhoImagem() {
        return $this->caminhoImagem;
    }

    public function getCaminhoVideo() {
        return $this->caminhoVideo;
    }

    public function getCasamento() {
        return $this->casamento;
    }

    public function setTextoCapa($textoCapa) {
        $this->textoCapa = $textoCapa;
    }

    public function setCaminhoImagem($caminhoImagem) {
        $this->caminhoImagem = $caminhoImagem;
    }

    public function setCaminhoVideo($caminhoVideo) {
        $this->caminhoVideo = $caminhoVideo;
    }

    public function setCasamento(\Casamento $casamento) {
        $this->casamento = $casamento;
    }




}

