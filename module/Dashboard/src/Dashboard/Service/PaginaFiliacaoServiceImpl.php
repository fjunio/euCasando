<?php

namespace Dashboard\Service;

use PaginaFiliacaoVO;

/**
 * Description of PaginaFiliacaoServiceImpl
 *
 * @author francis.oliveira
 */
class PaginaFiliacaoServiceImpl extends Service implements PaginaFiliacaoService {
    
    public function __construct($serviceLocator) {
        $this->setServiceLocator($serviceLocator);
    }

    public function getByCasamentoId($idCasamento) {
        
    }

    public function save(PaginaFiliacaoVO $paginaFiliacao) {
        
    }

    public function update(PaginaFiliacaoVO $paginaFiliacao) {
        
    }

}
