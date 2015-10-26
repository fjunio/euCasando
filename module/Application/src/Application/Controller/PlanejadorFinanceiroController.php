<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Description of PlanejadorFinanceiroController
 *
 * @author francis.oliveira
 */
class PlanejadorFinanceiroController extends AbstractActionController {
    
    public function indexAction(){
        return new ViewModel();
    }
}
