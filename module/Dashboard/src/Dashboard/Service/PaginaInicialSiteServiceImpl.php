<?php

namespace Dashboard\Service;

use Dashboard\VO\PaginaInicialSiteVO;

/**
 * Description of PaginaInicialSiteServiceImpl
 *
 * @author francis.oliveira
 */
class PaginaInicialSiteServiceImpl extends Service implements PaginaInicialSiteService {
    
    private $paginaInicialSiteDAO = null;

    public function __construct($serviceLocator) {
        $this->setServiceLocator($serviceLocator);
    }    
    
    public function save(PaginaInicialSiteVO $paginaInicial) {
        
    }

    public function update(PaginaInicialSiteVO $paginaInicial) {
        
    }

    public function getByCasamentoId($idCasamento) {
        
    }    
    private function getPaginaInicialDao() {
        if ($this->paginaInicialSiteDAO === null) {
            $this->paginaInicialSiteDAO = $this->getServiceLocator()
                    ->get('PaginaInicialSiteDAOFactory');
        }
        return $this->paginaInicialSiteDAO;
    }

}
