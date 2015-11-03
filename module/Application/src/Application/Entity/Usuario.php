<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario", indexes={@ORM\Index(name="id_idx", columns={"pessoa_id"})})
 * @ORM\Entity
 */
class Usuario extends Application\Entity\Base\Entity
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
     * @ORM\Column(name="login", type="string", length=20, nullable=false)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="senha", type="string", length=20, nullable=false)
     */
    private $senha;

    /**
     * @var \Pessoa
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Pessoa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pessoa_id", referencedColumnName="id")
     * })
     */
    private $pessoa;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Casamento", inversedBy="usuario")
     * @ORM\JoinTable(name="usuario_casamento",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Usuario_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Casamento_id", referencedColumnName="id")
     *   }
     * )
     */
    private $casamento;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->casamento = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    public function getLogin() {
        return $this->login;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getPessoa() {
        return $this->pessoa;
    }

    public function getCasamento() {
        return $this->casamento;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function setPessoa(\Pessoa $pessoa) {
        $this->pessoa = $pessoa;
    }

    public function setCasamento(\Doctrine\Common\Collections\Collection $casamento) {
        $this->casamento = $casamento;
    }



}

