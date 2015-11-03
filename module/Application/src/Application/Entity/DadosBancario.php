<?php

namespace Application\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * DadosBancario
 *
 * @ORM\Table(name="dados_bancario", indexes={@ORM\Index(name="fk_Dado_Bancario_Pessoa1_idx", columns={"Pessoa_id"})})
 * @ORM\Entity
 */
class DadosBancario extends Application\Entity\Base\Entity
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
     * @ORM\Column(name="favorecido", type="string", length=45, nullable=false)
     */
    private $favorecido;

    /**
     * @var string
     *
     * @ORM\Column(name="cpf", type="string", length=11, nullable=false)
     */
    private $cpf;

    /**
     * @var string
     *
     * @ORM\Column(name="cnpf", type="string", length=45, nullable=true)
     */
    private $cnpf;

    /**
     * @var string
     *
     * @ORM\Column(name="banco", type="string", length=45, nullable=false)
     */
    private $banco;

    /**
     * @var string
     *
     * @ORM\Column(name="agencia", type="string", length=45, nullable=false)
     */
    private $agencia;

    /**
     * @var string
     *
     * @ORM\Column(name="conta", type="string", length=45, nullable=false)
     */
    private $conta;

    /**
     * @var \Pessoa
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Pessoa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Pessoa_id", referencedColumnName="id")
     * })
     */
    private $pessoa;
    
    public function getFavorecido() {
        return $this->favorecido;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getCnpf() {
        return $this->cnpf;
    }

    public function getBanco() {
        return $this->banco;
    }

    public function getAgencia() {
        return $this->agencia;
    }

    public function getConta() {
        return $this->conta;
    }

    public function getPessoa() {
        return $this->pessoa;
    }

    public function setFavorecido($favorecido) {
        $this->favorecido = $favorecido;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function setCnpf($cnpf) {
        $this->cnpf = $cnpf;
    }

    public function setBanco($banco) {
        $this->banco = $banco;
    }

    public function setAgencia($agencia) {
        $this->agencia = $agencia;
    }

    public function setConta($conta) {
        $this->conta = $conta;
    }

    public function setPessoa(\Pessoa $pessoa) {
        $this->pessoa = $pessoa;
    }




}

