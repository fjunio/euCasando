<?php

namespace Dashboard\Service;

/**
 * Description of PadrinhoServiceImpl
 *
 * @author francis.oliveira
 */
class PadrinhoServiceImpl extends Service implements PadrinhoService {
    public function __construct($serviceLocator) {
        $this->setServiceLocator($serviceLocator);
    }
}
