<?php

namespace Dashboard\Service;

use Dashboard\VO\PlanejadorFinanceiroVO;

/**
 *
 * @author francis.oliveira
 */
interface PlanejadorFinanceiroService {
    public function save(PlanejadorFinanceiroVO $financaVo);
    public function update(PlanejadorFinanceiroVO $financaVo);
    public function delete(PlanejadorFinanceiroVO $financaVo);
    public function getById($idConvidado);
    public function getAllByCasamentoId($idCasamento);

}
