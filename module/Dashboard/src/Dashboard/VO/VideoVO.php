<?php

namespace Dashboard\VO;

/**
 * Description of VideoVO
 *
 * @author francis.oliveira
 */
class VideoVO {
    
    private $id;
    
    private $nomeFile;
    
    private $legenda;
    
    public function getId() {
        return $this->id;
    }

    public function getNomeFile() {
        return $this->nomeFile;
    }

    public function getLegenda() {
        return $this->legenda;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNomeFile($nomeFile) {
        $this->nomeFile = $nomeFile;
    }

    public function setLegenda($legenda) {
        $this->legenda = $legenda;
    }


    
    
}
