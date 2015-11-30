<?php

namespace Dashboard\DAO;

use Application\DAO\DAOBase\DAOBase;
use Dashboard\Entity\PlanejadorFinanceiro;
use Doctrine\DBAL\Exception\ConnectionException;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMInvalidArgumentException;

/**
 * Description of PlanejadorFinanceiroDAOImpl
 *
 * @author francis.oliveira
 */
class PlanejadorFinanceiroDAOImpl extends DAOBase implements PlanejadorFinanceiroDAO {

    private $repository = null;
    private $serviceLocator = null;
    
    public function __construct($serviceLocator) {        
        parent::__construct($serviceLocator->get("Doctrine\ORM\EntityManager"));
        $this->serviceLocator = $serviceLocator;
    }
    
    public function commitWork(EntityManager $entity) {
        try {
            if (!$entity === null) {
                $entity->commit();
            } else {
                parent::commit();
            }
        } catch (ConnectionException $exc) {
            throw $exc;
        }
    }

    public function deleteEntity(EntityManager $entity, PlanejadorFinanceiro $convidado) {
        try {
            if (!$entity === null) {
                $entity->remove($convidado);
            } else {
                parent::delete($convidado);
            }
        } catch (ORMInvalidArgumentException $exc) {
            throw $exc;
        }
    }

    public function getListByCasamentoId($id) {
        try {
            return $this->getRepository()->findBy(array(
                        'casamento' => (int) $id,
            ));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }   
    }
    
    public function getById($id) {
        return $this->getEntityManager()->find('Dashboard\Entity\PlanejadorFinanceiro', $id);
    }
    
    public function getRepository() {
        if ($this->repository === null) {
            $this->repository = $this->getEntityManager()
                    ->getRepository("\Dashboard\Entity\PlanejadorFinanceiro");
        }
        return $this->repository;        
    }

    public function roolbackWork(EntityManager $entity) {
        try {
            if (!$entity === null) {
                $entity->rollback();
            } else {
                parent::roolback();
            }
        } catch (ConnectionException $exc) {
            throw $exc;
        }
    }

    public function saveEntity(EntityManager $entity, PlanejadorFinanceiro $convidado) {
        try {
            if (!$entity === null) {
                $entity->persist($convidado);
            } else {
                parent::save($convidado);
            }
        } catch (ORMInvalidArgumentException $exc) {
            throw $exc;
        }   
    }

    public function startTransaction() {
        $entity = $this->getEntityManager();
        $entity->beginTransaction();
        return $entity;
    }

}
