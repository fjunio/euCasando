<?php

namespace Dashboard\Service;

/**
 *
 * @author francis.oliveira
 */
class Service {
   protected $serviceLocator = null;
   protected $casamentoService = null;
   
   public function getServiceLocator() {
       return $this->serviceLocator;
   }

   public function setServiceLocator($serviceLocator) {
       $this->serviceLocator = $serviceLocator;
   }

   /**
    * Método que retorna um objeto Casamento a partir do ID.
    * @param type $idCasamento
    * @return type \Dashboard\Entity\Casamento
    * @throws ValidationException
    */
   protected function getCasamentoById($idCasamento) {
        if ($idCasamento === null) {
            throw new ValidationException('ID Casamento está nulo');
        }
        $this->casamentoService = $this->getCasamentoService();
        return $this->casamentoService->getById((int) $idCasamento);
    }
    
    /**
     * Retorna uma instancia de Service do Casamento a partir do Service Locator
     * @return type
     */
    protected function getCasamentoService() {
        if ($this->casamentoService === null) {
            $this->casamentoService = $this->getServiceLocator()
                    ->get('CasamentoServiceFactory');
        }
        return $this->casamentoService;
    }    


   
}
