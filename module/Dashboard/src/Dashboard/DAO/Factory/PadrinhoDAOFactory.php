<?php

namespace Dashboard\DAO\Factory;

use Dashboard\DAO\PadrinhoDAOImpl;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Description of PadrinhoDAOFactory
 *
 * @author francis.oliveira
 */
class PadrinhoDAOFactory implements FactoryInterface{
    
    public function createService(ServiceLocatorInterface $serviceLocator) {
        return new PadrinhoDAOImpl($serviceLocator);
    }
}
