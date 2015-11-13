<?php

namespace Dashboard\Service\Factory;

use Dashboard\Service\PlanejadorFinanceiroServiceImpl;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Description of PlanejadorFinanceiroServiceFactory
 *
 * @author francis.oliveira
 */
class PlanejadorFinanceiroServiceFactory  implements FactoryInterface{
    
    public function createService(ServiceLocatorInterface $serviceLocator) {
        return new PlanejadorFinanceiroServiceImpl($serviceLocator);
    }       
}
