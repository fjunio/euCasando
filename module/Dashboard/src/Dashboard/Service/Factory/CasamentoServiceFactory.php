<?php

namespace Dashboard\Service\Factory;

use Dashboard\Service\CasamentoServiceImpl;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Description of CasamentoServiceFactory
 *
 * @author francis.oliveira
 */
class CasamentoServiceFactory implements FactoryInterface{
    
    public function createService(ServiceLocatorInterface $serviceLocator) {
        return new CasamentoServiceImpl($serviceLocator);
    }       

}
