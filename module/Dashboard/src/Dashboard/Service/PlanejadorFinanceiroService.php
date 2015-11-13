<?php

namespace Dashboard\Service;

use Dashboard\VO\PlanejadorFinanceiroVO;

/**
 *
 * @author francis.oliveira
 */
interface PlanejadorFinanceiroService {
    public function save(PlanejadorFinanceiroVO $convidadoVo);
    public function update(PlanejadorFinanceiroVO $convidadoVo);
    public function delete(PlanejadorFinanceiroVO $convidadoVo);
    public function getAllByCasamentoId($idCasamento);
    public function getCasamentoById($idCasamento);

}
