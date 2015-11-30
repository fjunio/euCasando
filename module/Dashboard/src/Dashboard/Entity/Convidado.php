<?php

namespace Dashboard\Entity;

use Doctrine\ORM\Mapping as ORM;
use Application\Entity\Base\Entity;

/**
 * ListaConvidados
 *
 * @ORM\Table(name="convidado", indexes={@ORM\Index(name="fk_Lista_Convidados_Cliente1", columns={"idCliente"})})
 * @ORM\Entity
 */
class Convidado extends Entity
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
     * @var integer
     *
     * @ORM\Column(name="qtde_adultos", type="integer", nullable=true)
     */
    private $qtdeAdultos;

    /**
     * @var integer
     *
     * @ORM\Column(name="qtde_criancas", type="integer", nullable=true)
     */
    private $qtdeCriancas;

    /**
     * @var boolean
     *
     * @ORM\Column(name="save_date_enviado", type="boolean", nullable=false)
     */
    private $saveDateEnviado;

    /**
     * @var \Casamento
     * @ORM\ManyToOne(targetEntity="Casamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="casamento_id", referencedColumnName="id")
     * })
     */
    private $casamento;
    
    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getQtdeAdultos() {
        return $this->qtdeAdultos;
    }

    public function getQtdeCriancas() {
        return $this->qtdeCriancas;
    }

    public function getSaveDateEnviado() {
        return $this->saveDateEnviado;
    }

    public function getCasamento() {
        return $this->casamento;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setQtdeAdultos($qtdeAdultos) {
        $this->qtdeAdultos = $qtdeAdultos;
    }

    public function setQtdeCriancas($qtdeCriancas) {
        $this->qtdeCriancas = $qtdeCriancas;
    }

    public function setSaveDateEnviado($saveDateEnviado) {
        $this->saveDateEnviado = $saveDateEnviado;
    }

    public function setCasamento(Casamento $casamento) {
        $this->casamento = $casamento;
    }


}

