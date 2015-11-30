<?php

namespace Dashboard\Service;

use Application\Exception\ValidationException;
use Dashboard\Entity\PlanejadorFinanceiro;
use Dashboard\VO\PlanejadorFinanceiroVO;

/**
 * Description of PlanejadorFinanceiroServiceImpl
 *
 * @author francis.oliveira
 */
class PlanejadorFinanceiroServiceImpl extends Service implements PlanejadorFinanceiroService {
    
    private $planejadorFinanceiroDao = null;
    
    public function __construct($serviceLocator) {
        $this->setServiceLocator($serviceLocator);
    }
        
    /**
     * Deleta um registro PlanejadorFinanceiro no banco de dados.
     * @param PlanejadorFinanceiroVO $financaVo
     * @throws ValidationException
     */
    public function delete(PlanejadorFinanceiroVO $financaVo) {
        $planejadorFinanceiro = $this->getById($financaVo->getId());
        
        if($planejadorFinanceiro === null){
            throw new ValidationException('Objeto Planejador Financeiro não foi encontrado: '. $planejadorFinanceiro->getId());
        }
                
        $planejadorFinanceiro->setCasamento($planejadorFinanceiro->getCasamento());
        
        $this->getPlanejadorFinanceiroDao()
                ->delete($planejadorFinanceiro);        
    }

    /**
     * Retorna a lista de Financas pelo ID Casamento
     * @param type $idCasamento
     * @return PlanejadorFinanceiroVO
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

    /**
     * Cria um registro de financa na base de dados.
     * @param PlanejadorFinanceiroVO $financaVo
     */
    public function save(PlanejadorFinanceiroVO $financaVo) {
        if ($financaVo->getIdCasamento() === null){
            throw new ValidationException('ID casamento esta nulo');
        }
        $casamento = $this->getCasamentoById($financaVo->getIdCasamento());
        $financa = new PlanejadorFinanceiro();
        $financa->setDescricao($financaVo->getDescricao());
        $financa->setValor($financaVo->getValor());
        $financa->setQuemPagou($financaVo->getQuemPagou());
        $financa->setCompensado($financaVo->getCompensado());
        $financa->setCategoria($financaVo->getCategoria());
        $financa->setCasamento($casamento);
        
        try {
            $this->getPlanejadorFinanceiroDao()->save($financa);
        } catch (Exception $exc) {
            throw new ApplicationException($exc->getTraceAsString());
        }
    }

    /**
     * Atualiza o Objeto PlanejadorFinanceiro na base de dados.
     * @param PlanejadorFinanceiroVO $financaVo
     */
    public function update(PlanejadorFinanceiroVO $financaVo) {
        if ($financaVo->getIdCasamento() === null){
            throw new ValidationException('ID casamento esta nulo');
        }
        $financa = $this->getById($financaVo->getId());
        if ($financa === null) {
            throw new ValidationException('Objeto PlanejadorFinanceiro nao encontrato: '.$financaVo->getId());
        }
        
        $financa->setDescricao($financaVo->getDescricao());
        $financa->setValor($financaVo->getValor());
        $financa->setQuemPagou($financaVo->getQuemPagou());
        $financa->setCompensado($financaVo->getCompensado());
        $financa->setCategoria($financaVo->getCategoria());
        
        try {
            $this->getPlanejadorFinanceiroDao()->update($financa);
        } catch (Exception $exc) {
            throw new ApplicationException($exc->getTraceAsString());
        }        
    }
    
    /**
     * Retorna um objeto de Financas pelo ID
     * @param type $idPlanejadorFinanca
     * @return type
     */
    public function getById($idPlanejadorFinanca) {
        $financa = $this->getPlanejadorFinanceiroDao()->getById($idPlanejadorFinanca);        
        return $financa;
    }    
    
    private function getPlanejadorFinanceiroDao(){
        if($this->planejadorFinanceiroDao === null){
            $this->planejadorFinanceiroDao = $this->getServiceLocator()
                    ->get('PlanejadorFinanceiroDAOFactory');
        }
        return $this->planejadorFinanceiroDao;
    }

}
