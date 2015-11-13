<?php

namespace Dashboard\Service;

use Dashboard\Entity\Casamento;
use Dashboard\VO\CasamentoVO;

/**
 * Description of CasamentoServiceImpl
 *
 * @author francis.oliveira
 */
class CasamentoServiceImpl extends Service implements CasamentoService {

    private $casamentoDao = null;
    
    public function __construct($serviceLocator) {
        $this->setServiceLocator($serviceLocator);
    }

    public function delete(CasamentoVO $casamento) {
        
    }

    public function getById($idCasamento) {
        $casamento = $this->getCasamentoDao()->getById($idCasamento);        
        return $casamento;
        
    }

    public function save(CasamentoVO $casamento) {
        
    }

    public function update(CasamentoVO $casamento) {
        
    }
    private function getCasamentoDao(){
        if($this->casamentoDao === null){
            $this->casamentoDao = $this->getServiceLocator()
                    ->get('CasamentoDAOFactory');
        }
        return $this->casamentoDao;
    }
}
