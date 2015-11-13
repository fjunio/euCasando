<?php

namespace Dashboard\DAO\Factory;

use Dashboard\DAO\PlanejadorFinanceiroDAOImpl;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Description of PlanejadorFinanceiroDAOFactory
 *
 * @author francis.oliveira
 */
class PlanejadorFinanceiroDAOFactory implements FactoryInterface{
    
    public function createService(ServiceLocatorInterface $serviceLocator) {
        return new PlanejadorFinanceiroDAOImpl($serviceLocator);
    }
}
