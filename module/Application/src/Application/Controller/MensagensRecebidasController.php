<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
/**
 * Description of MensagensRecebidasController
 *
 * @author francis
 */
class MensagensRecebidasController extends AbstractActionController {

    public function indexAction()
    {
        return new ViewModel();
    }    
}
