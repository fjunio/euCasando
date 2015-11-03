<?php

namespace Dashboard\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mensagen
 *
 * @ORM\Table(name="mensagem", indexes={@ORM\Index(name="fk_Mensagen_config_mensagem1_idx", columns={"config_mensagem_id"})})
 * @ORM\Entity
 */
class Mensagem extends Application\Entity\Base\Entity
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
     * @ORM\Column(name="nome", type="string", length=45, nullable=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="texto", type="text", length=65535, nullable=false)
     */
    private $texto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="aprovada", type="boolean", nullable=false)
     */
    private $aprovada;

    /**
     * @var \ConfigMensagem
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="ConfigMensagem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="config_mensagem_id", referencedColumnName="id")
     * })
     */
    private $configMensagem;
    
    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getTexto() {
        return $this->texto;
    }

    public function getAprovada() {
        return $this->aprovada;
    }

    public function getConfigMensagem() {
        return $this->configMensagem;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setTexto($texto) {
        $this->texto = $texto;
    }

    public function setAprovada($aprovada) {
        $this->aprovada = $aprovada;
    }

    public function setConfigMensagem(\ConfigMensagem $configMensagem) {
        $this->configMensagem = $configMensagem;
    }




}

