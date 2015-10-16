<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        //$controllerName =$this->params('controller');
        //$this->getEvent()->getRouteMatch()->getParam('controller', 'index');
        //$this->layout('layout/layout-secundario');
        
        //$plugin = $this->PluginsFuncoes();
        //$plugin->doSomething();
        
        
        
        return new ViewModel();
    }
}
