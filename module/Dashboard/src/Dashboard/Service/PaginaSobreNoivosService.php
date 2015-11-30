<?php

namespace Dashboard\Service;

use Dashboard\VO\PaginaSobreNoivosVO;

/**
 *
 * @author francis.oliveira
 */
interface PaginaSobreNoivosService {
    public function save(PaginaSobreNoivosVO $paginaInicial);
    public function update(PaginaSobreNoivosVO $paginaInicial);
    public function getByCasamentoId($idCasamento);
}
