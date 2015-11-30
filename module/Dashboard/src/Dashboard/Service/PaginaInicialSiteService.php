<?php

namespace Dashboard\Service;

use Dashboard\VO\PaginaInicialSiteVO;

/**
 *
 * @author francis.oliveira
 */
interface PaginaInicialSiteService {
    public function save(PaginaInicialSiteVO $paginaInicial);
    public function update(PaginaInicialSiteVO $paginaInicial);
    public function getByCasamentoId($idCasamento);
}
