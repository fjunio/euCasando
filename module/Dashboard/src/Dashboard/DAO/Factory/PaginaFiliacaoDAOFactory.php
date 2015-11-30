<?php

namespace DAO\Factory;

use Dashboard\DAO\PaginaFiliacaoDAOImpl;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Description of PaginaFiliacaoDAOFactory
 *
 * @author francis.oliveira
 */
class PaginaFiliacaoDAOFactory implements FactoryInterface{
    
    public function createService(ServiceLocatorInterface $serviceLocator) {
        return new PaginaFiliacaoDAOImpl($serviceLocator);
    }
}
