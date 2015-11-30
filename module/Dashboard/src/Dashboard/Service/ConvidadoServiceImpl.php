<?php

namespace Dashboard\Service;

use Application\Exception\ValidationException;
use Dashboard\Entity\Convidado;
use Dashboard\VO\ConvidadoVO;
use Zend\Validator\EmailAddress;

/**
 * Description of ConvidadoServiceImpl
 *
 * @author francis.oliveira
 */
class ConvidadoServiceImpl extends Service implements ConvidadoService{

    private $convidadoDao = null;
    
    public function __construct($serviceLocator) {
        $this->setServiceLocator($serviceLocator);
    }
    

    /**
     * 
     * @param ConvidadoVO $convidadoVo
     * @throws ValidationException
     */
    public function save(ConvidadoVO $convidadoVo){
        $convidado = new Convidado();
        
        $casamento = $this->getCasamentoById((int)$convidadoVo->getIdCasamento());
        
        if ($casamento === null) {
            throw new ValidationException('Objeto Casamento não foi encontrado: '. $convidadoVo->getIdCasamento());
        }
        
        $convidado->setNome($convidadoVo->getNome());
        $convidado->setEmail($convidadoVo->getEmail());
        $convidado->setCasamento($casamento);
        $convidado->setSaveDateEnviado((bool)false);
        $convidado->setQtdeAdultos((int)$convidadoVo->getQtdeAdultos());
        $convidado->setQtdeCriancas((int)$convidadoVo->getQtdeCriancas());
        
        //Valida e-mail
        $validator = new EmailAddress();
        if (!$validator->isValid($convidado->getEmail())) {
            throw new ValidationException('Email não é válido');
        }
        
        $this->convidadoDao = $this->getConvidadoDao();
        $this->convidadoDao->save($convidado);
    }
    
    public function getResumoConvidados($listaConvidadoVo){
        
        $qtde_adultos = $qtde_criancas = $qtde_total = 0;
        foreach ($listaConvidadoVo as $convidado){
            $qtde_adultos += $convidado->getQtdeAdultos();
            $qtde_criancas += $convidado->getQtdeCriancas();
            $qtde_total += $convidado->getQtdeAdultos() + $convidado->getQtdeCriancas(); 
        }
        
        return ['qtde_adultos' => $qtde_adultos,
                'qtde_criancas' => $qtde_criancas,
                'qtde_total'    => $qtde_total];
    }


    public function delete(ConvidadoVO $convidadoVo) {
        
        $convidado = $this->getById($convidadoVo->getId());
        
        if($convidado === null){
            throw new ValidationException('Objeto Convidado não foi encontrado: '. $convidadoVo->getId());
        }
                
        $convidado->setCasamento($convidado->getCasamento());
        
        $this->convidadoDao = $this->getConvidadoDao();
        $this->convidadoDao->delete($convidado);
    }
    
    public function getById($idConvidado) {
        $casamento = $this->getConvidadoDao()->getById($idConvidado);        
        return $casamento;
        
    }

    /**
     * 
     * @param type $idCasamento
     * @return ConvidadoVO
     * @throws ValidationException
     */
    public function getAllByCasamentoId($idCasamento) {
        if($idCasamento === null){
            throw new ValidationException('ID Casamento está nulo');
        }
        
        $casamento = $this->getCasamentoById((int)$idCasamento);
        
        if ($casamento === null) {
            throw new ValidationException('Objeto Casamento não foi encontrado: '. $convidadoVo->getIdCasamento());
        }
        
        $listaConvidados = $this->getConvidadoDao()->getListByCasamentoId($casamento->getId());
        $convidadoVo = null;
        $listaConvidadosVo = array();
        $cont = 0;
        foreach ($listaConvidados as $convidado){
            $convidadoVo = new ConvidadoVO();
            $convidadoVo->setId($convidado->getId());
            $convidadoVo->setNome($convidado->getNome());
            $convidadoVo->setEmail($convidado->getEmail());
            $convidadoVo->setQtdeAdultos($convidado->getQtdeAdultos());
            $convidadoVo->setQtdeCriancas($convidado->getQtdeCriancas());
            $convidadoVo->setIdCasamento($convidado->getCasamento()->getId());
            
            $cont = count($listaConvidadosVo);
            $listaConvidadosVo[$cont] = $convidadoVo;
        }
        
        return $listaConvidadosVo;
    }

    public function update(ConvidadoVO $convidadoVo) {
        
    }
    
    private function getConvidadoDao(){
        if($this->convidadoDao === null){
            $this->convidadoDao = $this->getServiceLocator()
                    ->get('ConvidadoDAOFactory');
        }
        return $this->convidadoDao;
    }
}
