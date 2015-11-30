<?php

namespace Dashboard\Service\Factory;

use Dashboard\Service\PaginaSobreNoivosServiceImpl;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Description of PaginaSobreNoivosServiceFactory
 *
 * @author francis.oliveira
 */
class PaginaSobreNoivosServiceFactory implements FactoryInterface{
    
    public function createService(ServiceLocatorInterface $serviceLocator) {
        return new PaginaSobreNoivosServiceImpl($serviceLocator);
    }       
}
