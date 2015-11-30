<?php

namespace Dashboard\Service\Factory;

use Dashboard\Service\PaginaInicialSiteServiceImpl;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Description of PaginaInicialSiteServiceFactory
 *
 * @author francis.oliveira
 */
class PaginaInicialSiteServiceFactory implements FactoryInterface{
    
    public function createService(ServiceLocatorInterface $serviceLocator) {
        return new PaginaInicialSiteServiceImpl($serviceLocator);
    }       
}
