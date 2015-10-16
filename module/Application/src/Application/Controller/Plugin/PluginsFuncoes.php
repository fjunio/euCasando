<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PluginFuncoes
 *
 * @author Israel Vinicius
 */
namespace Application\Controller\Plugin;

use Zend\Mvc\Controller\Plugin\AbstractPlugin;
use Zend\Debug\Debug;

class PluginsFuncoes extends AbstractPlugin{
    
    public function retornaNomeCtrAct($rota = '1')
    {
        $nome = 'aaa';
        if($rota == '1')
        {
            //$controllerName = $this->getController();
            //$controllerName =$this->params('controller');
            //$this->getRequest()->getRequest('name', 'default');
            //$controllerName = $sfsdf->getEvent()->getRouteMatch()->getParam('name', 'default');
            //Debug::dump($controllerName);
            
            /*$controllerName =$this->params('controller');
            $controllerName1 = $this->getEvent()->getRouteMatch()->getParam('controller', 'index');
            echo '<pre>';
            print_r($controllerName);
            echo '</pre>';
            echo '<pre>';
            print_r($controllerName1);
            echo '</pre>';*/
        }
        else
        {
            
        }
        return $nome;
    }
    
}

?>
