<?php

namespace Dashboard\Service;

/**
 *
 * @author francis.oliveira
 */
class Service {
   protected $serviceLocator = null;
   
   public function getServiceLocator() {
       return $this->serviceLocator;
   }

   public function setServiceLocator($serviceLocator) {
       $this->serviceLocator = $serviceLocator;
   }


   
}
