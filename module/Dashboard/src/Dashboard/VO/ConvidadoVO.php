<?php


namespace Dashboard\VO;

/**
 * Description of ConvidadoVO
 *
 * @author francis.oliveira
 */
class ConvidadoVO {
    
    /**
     *
     * @var integer
     */
    private $id;

    /**
     *
     * @var string
     */
    private $nome;
    
    /**
     *
     * @var string
     */
    private $email;
    
    /**
     *
     * @var integer
     */
    private $qtdeAdultos;
    
    /**
     *
     * @var type integer
     */
    private $qtdeCriancas;
    
    /**
     *
     * @var type integer
     */
    private $idCasamento;
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
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

    public function getIdCasamento() {
        return $this->idCasamento;
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

    public function setIdCasamento($idCasamento) {
        $this->idCasamento = $idCasamento;
    }


}
