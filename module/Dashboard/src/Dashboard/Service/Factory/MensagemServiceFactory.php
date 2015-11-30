<?php

namespace Dashboard\Service\Factory;

use Dashboard\Service\MensagemServiceImpl;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Description of MensagemServiceFactory
 *
 * @author francis.oliveira
 */
class MensagemServiceFactory implements FactoryInterface{
    
    public function createService(ServiceLocatorInterface $serviceLocator) {
        return new MensagemServiceImpl($serviceLocator);
    }       
}
