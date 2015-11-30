<?php

namespace DAO\Factory;

use Dashboard\DAO\PaginaInicialSiteDAOImpl;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Description of PaginaInicialSiteDAOFactory
 *
 * @author francis.oliveira
 */
class PaginaInicialSiteDAOFactory implements FactoryInterface{
    
    public function createService(ServiceLocatorInterface $serviceLocator) {
        return new PaginaInicialSiteDAOImpl($serviceLocator);
    }
    
}
