<?php

namespace Dashboard\Service;

use Dashboard\VO\CasamentoVO;

/**
 *
 * @author francis.oliveira
 */
interface CasamentoService {
    
    public function save(CasamentoVO $casamento);
    public function update(CasamentoVO $casamento);
    public function delete(CasamentoVO $casamento);
    public function getById($idCasamento);
    
}
