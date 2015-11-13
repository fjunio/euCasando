<?php

namespace Dashboard\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Description of PlanejadorFinanceiroController
 *
 * @author francis.oliveira
 */
class PlanejadorFinanceiroController extends AbstractActionController {
    
    private $planejadorFinanceiroService = null;
    
    public function indexAction(){
        $listaFinancasVo = $this->getPlanejadorFinanceiroService()->getAllByCasamentoId((int)1);        
        $view = new ViewModel(array('lista' => $listaFinancasVo));        
        return $view;
    }
    
    public function deletarDespesaAction(){
        return $this->redirect()
                    ->toRoute('dashboard/default', array('controller' => 'planejador-financeiro'));
    }


    private function getPlanejadorFinanceiroService(){
        if($this->planejadorFinanceiroService === null){
            $this->planejadorFinanceiroService = $this->getServiceLocator()->get("PlanejadorFinanceiroServiceFactory");
        }
        return $this->planejadorFinanceiroService;
    } 
}
