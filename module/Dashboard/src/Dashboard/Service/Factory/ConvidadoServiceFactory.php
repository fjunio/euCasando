<?php

namespace Dashboard\Service\Factory;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

use Dashboard\Service\ConvidadoServiceImpl;
/**
 * Description of ServiceBaseFactory
 *
 * @author francis.oliveira
 */
class ConvidadoServiceFactory implements FactoryInterface{
    
    public function createService(ServiceLocatorInterface $serviceLocator) {
        return new ConvidadoServiceImpl($serviceLocator);
    }       

}
