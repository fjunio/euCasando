<?php

namespace Dashboard\Service;

use PaginaFiliacaoVO;

/**
 *
 * @author francis.oliveira
 */
interface PaginaFiliacaoService {
    public function save(PaginaFiliacaoVO $paginaFiliacao);
    public function update(PaginaFiliacaoVO $paginaFiliacao);
    public function getByCasamentoId($idCasamento);
}
