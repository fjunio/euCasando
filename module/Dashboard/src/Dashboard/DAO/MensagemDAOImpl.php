<?php

namespace Dashboard\DAO;

use Application\DAO\DAOBase\DAOBase;
use Application\Entity\Base\Entity;
use Doctrine\ORM\EntityManager;

/**
 * Description of MensagemDAOImpl
 *
 * @author francis.oliveira
 */
class MensagemDAOImpl extends DAOBase implements MensagemDAO {
    private $repository = null;
    private $serviceLocator = null;
    
    public function __construct($serviceLocator) {        
        parent::__construct($serviceLocator->get("Doctrine\ORM\EntityManager"));
        $this->serviceLocator = $serviceLocator;
    }    
    
    public function commitWork(EntityManager $entityManager) {
        try {
            if ($entityManager <> null) {
                $entityManager->flush();
                $entityManager->commit();
            } else {
                parent::commit();
            }
        } catch (ConnectionException $exc) {
            throw $exc;
        }        
    }
    
    public function saveEntity(EntityManager $entityManager, Entity $entity) {
        try {
            if ($entityManager <> null) {
                $entityManager->persist($entity);
            } else {
                parent::save($entity);
            }
        } catch (ORMInvalidArgumentException $exc) {
            throw $exc;
        }        
    }
    
    public function deleteEntity(EntityManager $entityManager, Entity $entity) {
        try {
            if ($entityManager <> null) {
                $entityManager->remove($entity);
            } else {
                parent::delete($entity);
            }
        } catch (ORMInvalidArgumentException $exc) {
            throw $exc;
        }              
    }
    
    /**
     * Retorna Uma entidade ou Null para o parametro passado.
     * @param type $id
     * @return type
     */
    public function getOneByCasamentoId($id) {
        try {
            return $this->getRepository()->findOneBy(array(
                        'casamento' => (int) $id,
            ));
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }                
    }
    
    
    public function getRepository() {
        if ($this->repository === null) {
            $this->repository = $this->getEntityManager()
                    ->getRepository("\Dashboard\Entity\ConfigMensagem");
        }
        return $this->repository;        
    }

    public function roolbackWork(EntityManager $entityManager) {
        try {
            if ($entityManager <> null) {
                $entityManager->rollback();
            } else {
                parent::roolback();
            }
        } catch (ConnectionException $exc) {
            throw $exc;
        }        
    }

    public function startTransaction() {
        $entity = $this->getEntityManager();
        $entity->beginTransaction();
        return $entity;
    }

    public function getConfigById($idConfig) {
        return $this->getEntityManager()->find('Dashboard\Entity\ConfigMensagem', $idConfig);
    }
}
