<?php

namespace Dashboard\DAO\Factory;

use Dashboard\DAO\CasamentoDAOImpl;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Description of ConvidadoDAOFactory
 *
 * @author francis.oliveira
 */
class CasamentoDAOFactory implements FactoryInterface{
    
    public function createService(ServiceLocatorInterface $serviceLocator) {
        return new CasamentoDAOImpl($serviceLocator);
    }
}
