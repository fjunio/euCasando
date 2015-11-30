<?php

namespace Dashboard\DAO;

use Application\DAO\DAOBase\DAOBase;

/**
 * Description of PadrinhoDAOImpl
 *
 * @author francis.oliveira
 */
class PadrinhoDAOImpl extends DAOBase implements PadrinhoDAO {
    private $repository = null;
    private $serviceLocator = null;
    
    public function __construct($serviceLocator) {        
        parent::__construct($serviceLocator->get("Doctrine\ORM\EntityManager"));
        $this->serviceLocator = $serviceLocator;
    } 
    
    public function getRepository() {
        if ($this->repository === null) {
            $this->repository = $this->getEntityManager()
                    ->getRepository("\Dashboard\Entity\PaginaPadrinho");
        }
        return $this->repository;          
    }
}
