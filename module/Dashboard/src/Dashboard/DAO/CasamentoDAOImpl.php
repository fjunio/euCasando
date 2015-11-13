<?php

namespace Dashboard\DAO;

use Application\DAO\DAOBase\DAOBase as DAOBase;
/**
 * Description of CasamentoDAOImpl
 *
 * @author francis.oliveira
 */
class CasamentoDAOImpl extends DAOBase implements CasamentoDAO {
    
    private $repository = null;
    private $serviceLocator = null;
    
    public function __construct($serviceLocator) {        
        parent::__construct($serviceLocator->get("Doctrine\ORM\EntityManager"));
        $this->serviceLocator = $serviceLocator;
    }   
    
    public function getById($id) {
        return $this->getEntityManager()->find('Dashboard\Entity\Casamento', $id);
    }
    
    public function getRepository() {
       if ($this->repository === null) {
            $this->repository = $this->getEntityManager()
                    ->getRepository("\Dashboard\Entity\Convidado");
        }
        return $this->repository;        
    }

}
