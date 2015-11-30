<?php

namespace Dashboard\Service;

use Dashboard\VO\ConvidadoVO;

/**
 *
 * @author francis.oliveira
 */
interface ConvidadoService {
    public function save(ConvidadoVO $convidadoVo);
    public function update(ConvidadoVO $convidadoVo);
    public function delete(ConvidadoVO $convidadoVo);
    public function getAllByCasamentoId($idCasamento);
    public function getById($idConvidado);
    public function getResumoConvidados($listaConvidadoVo);
}
