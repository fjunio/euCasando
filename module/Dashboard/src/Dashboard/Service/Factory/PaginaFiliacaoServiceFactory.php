<?php

namespace Dashboard\Service\Factory;

use Dashboard\Service\PaginaFiliacaoServiceImpl;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Description of PaginaFiliacaoServiceFactory
 *
 * @author francis.oliveira
 */
class PaginaFiliacaoServiceFactory implements FactoryInterface{
    
    public function createService(ServiceLocatorInterface $serviceLocator) {
        return new PaginaFiliacaoServiceImpl($serviceLocator);
    }       
}
