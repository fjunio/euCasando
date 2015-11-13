<?php

namespace Dashboard\Entity;

use Application\Entity\Base\Entity as EntityFoto;

 use Doctrine\ORM\Mapping as ORM;

/**
 * Foto
 *
 * @ORM\Table(name="foto")
 * @ORM\Entity
 */
class Foto extends EntityFoto {
    
//    /**
//     * @var integer
//     *
//     * @ORM\Column(name="id", type="integer", nullable=false)
//     * @ORM\Id
//     * @ORM\GeneratedValue(strategy="IDENTITY")
//     */
//    private $id;    
    
    /**
     * @var string
     *
     * @ORM\Column(name="caminho", type="text", length=45, nullable=false)
     */    
    private $caminho;
    
    /**
     * @var string
     *
     * @ORM\Column(name="legenda", type="text", length=45, nullable=true)
     */    
    private $legenda;
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

        
    public function getCaminho() {
        return $this->caminho;
    }

    public function getLegenda() {
        return $this->legenda;
    }

    public function setCaminho($caminho) {
        $this->caminho = $caminho;
    }

    public function setLegenda($legenda) {
        $this->legenda = $legenda;
    }


}
