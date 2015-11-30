<?php

namespace Dashboard\Service;

use Dashboard\VO\PaginaSobreNoivosVO;

/**
 * Description of PaginaSobreNoivosServiceImpl
 *
 * @author francis.oliveira
 */
class PaginaSobreNoivosServiceImpl extends Service implements PaginaSobreNoivosService {

    private $paginaSobreNoivosDAO = null;
    
    public function __construct($serviceLocator) {
        $this->setServiceLocator($serviceLocator);
    }

    public function getByCasamentoId($idCasamento) {
        
    }

    public function save(PaginaSobreNoivosVO $paginaInicial) {
        
    }

    public function update(PaginaSobreNoivosVO $paginaInicial) {
        
    }
    
    private function getPaginaSobreNoivosDao() {
        if ($this->paginaSobreNoivosDAO === null) {
            $this->paginaSobreNoivosDAO = $this->getServiceLocator()
                    ->get('PaginaSobreNoivosDAOFactory');
        }
        return $this->paginaSobreNoivosDAO;
    }    

}
