<?php

namespace Dashboard\DAO\Factory;

use Dashboard\DAO\PaginaSobreNoivosDAOImpl;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Description of PaginaSobreNoivosFactory
 *
 * @author francis.oliveira
 */
class PaginaSobreNoivosFactory  implements FactoryInterface{
    
    public function createService(ServiceLocatorInterface $serviceLocator) {
        return new PaginaSobreNoivosDAOImpl($serviceLocator);
    }
}
