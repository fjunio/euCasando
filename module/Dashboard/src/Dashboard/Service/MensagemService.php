<?php

namespace Dashboard\Service;

use Dashboard\VO\ConfigMensagemVO;
use Dashboard\VO\MensagemVO;

/**
 *
 * @author francis.oliveira
 */
interface MensagemService {
//    public function createMessage(ConfigMensagemVO $configMensagem);
    public function getConfigById($idConfig);
    public function delete(MensagemVO $mensagemVO);
    public function aproveMessage(MensagemVO $mensagemVO);
    public function updateConfig(ConfigMensagemVO $configMensagemVO);
    public function getAllByCasamentoId($idCasamento);
}
