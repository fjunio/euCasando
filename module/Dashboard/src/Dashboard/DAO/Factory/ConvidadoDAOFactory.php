<?php

namespace Dashboard\DAO\Factory;

use Dashboard\DAO\ConvidadoDAOImpl;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Description of ConvidadoDAOFactory
 *
 * @author francis.oliveira
 */
class ConvidadoDAOFactory implements FactoryInterface{
    
    public function createService(ServiceLocatorInterface $serviceLocator) {
        return new ConvidadoDAOImpl($serviceLocator);
    }
}
