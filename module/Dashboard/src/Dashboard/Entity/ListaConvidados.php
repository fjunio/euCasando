<?php

namespace Dashboard\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListaConvidados
 *
 * @ORM\Table(name="lista_convidados", indexes={@ORM\Index(name="fk_Lista_Convidados_Cliente1", columns={"idCliente"})})
 * @ORM\Entity
 */
class ListaConvidados extends Application\Entity\Base\Entity
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
     * @var integer
     *
     * @ORM\Column(name="idConvidado", type="integer", nullable=false)
     */
    private $idconvidado;

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
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Casamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCliente", referencedColumnName="id")
     * })
     */
    private $idcliente;
    
    public function getIdconvidado() {
        return $this->idconvidado;
    }

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

    public function getIdcliente() {
        return $this->idcliente;
    }

    public function setIdconvidado($idconvidado) {
        $this->idconvidado = $idconvidado;
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

    public function setIdcliente(\Casamento $idcliente) {
        $this->idcliente = $idcliente;
    }




}

