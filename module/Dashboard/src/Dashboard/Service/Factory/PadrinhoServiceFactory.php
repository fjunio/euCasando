<?php

namespace Dashboard\Service\Factory;

use Dashboard\Service\PadrinhoServiceImpl;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Description of PadrinhoServiceFactory
 *
 * @author francis.oliveira
 */
class PadrinhoServiceFactory implements FactoryInterface{
    
    public function createService(ServiceLocatorInterface $serviceLocator) {
        return new PadrinhoServiceImpl($serviceLocator);
    }       
}
