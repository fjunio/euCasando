<?php

namespace Dashboard\DAO\Factory;

use Dashboard\DAO\MensagemDAOImpl;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Description of MensagemDAOFactory
 *
 * @author francis.oliveira
 */
class MensagemDAOFactory implements FactoryInterface{
    
    public function createService(ServiceLocatorInterface $serviceLocator) {
        return new MensagemDAOImpl($serviceLocator);
    }
}
