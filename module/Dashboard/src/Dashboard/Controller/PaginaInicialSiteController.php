<?php

namespace Dashboard\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Description of PaginaInicialSiteController
 *
 * @author francis.oliveira
 */
class PaginaInicialSiteController extends AbstractActionController {
    
    public function indexAction(){
        $view = new ViewModel(array());        
        return $view;
    }
}
