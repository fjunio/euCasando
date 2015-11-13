<?php

namespace Dashboard\Service;

use Application\Exception\ValidationException;
use Dashboard\VO\PlanejadorFinanceiroVO;

/**
 * Description of PlanejadorFinanceiroServiceImpl
 *
 * @author francis.oliveira
 */
class PlanejadorFinanceiroServiceImpl extends Service implements PlanejadorFinanceiroService {
    
    private $PlanejadorFinanceiroDao = null;
    private $casamentoService = null;
    
    public function __construct($serviceLocator) {
        $this->setServiceLocator($serviceLocator);
    }
        
    public function delete(PlanejadorFinanceiroVO $convidadoVo) {
        
    }

    public function getAllByCasamentoId($idCasamento) {
        if($idCasamento === null){
            throw new ValidationException('ID Casamento está nulo');
        }
        
        $casamento = $this->getCasamentoById((int)$idCasamento);
        
        if ($casamento === null) {
            throw new ValidationException('Objeto Casamento não foi encontrado: '. $convidadoVo->getIdCasamento());
        }
        
        $listaFinancas = $this->getPlanejadorFinanceiroDao()->getListByCasamentoId($casamento->getId());
        $PlanejadorFinanceiroVo = null;
        $listaFinancasVo = array();
        $cont = 0;
        foreach ($listaFinancas as $f){
            $PlanejadorFinanceiroVo = new PlanejadorFinanceiroVO();
            $PlanejadorFinanceiroVo->setId($f->getId());
            $PlanejadorFinanceiroVo->setDescricao($f->getDescricao());
            $PlanejadorFinanceiroVo->setCategoria($f->getCategoria());
            $PlanejadorFinanceiroVo->setValor($f->getValor());
            $PlanejadorFinanceiroVo->setCompensado($f->getCompensado());
            $PlanejadorFinanceiroVo->setQuemPagou($f->getQuemPagou());
            $PlanejadorFinanceiroVo->setIdCasamento($f->getCasamento()->getId());
            
            $cont = count($listaFinancasVo);
            $listaFinancasVo[$cont] = $PlanejadorFinanceiroVo;
        }
        
        return $listaFinancasVo;        
    }

    public function getCasamentoById($idCasamento) {
        if($idCasamento === null){
            throw new ValidationException('ID Casamento está nulo');
        }
        $this->casamentoService = $this->getCasamentoService();
        $casamento = $this->casamentoService->getById((int)$idCasamento);
        return $casamento;
    }

    public function save(PlanejadorFinanceiroVO $convidadoVo) {
        
    }

    public function update(PlanejadorFinanceiroVO $convidadoVo) {
        
    }
    
    private function getPlanejadorFinanceiroDao(){
        if($this->PlanejadorFinanceiroDao === null){
            $this->PlanejadorFinanceiroDao = $this->getServiceLocator()
                    ->get('PlanejadorFinanceiroDAOFactory');
        }
        return $this->PlanejadorFinanceiroDao;
    }
    
    private function getCasamentoService(){
        if($this->casamentoService === null){
            $this->casamentoService = $this->getServiceLocator()
                    ->get('CasamentoServiceFactory');
        }
        return $this->casamentoService;
    }

}
