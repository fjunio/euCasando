<?php

namespace Application\DAO\DAOBase;

use Application\DAO\DAOBase\DAO as DAO;
use Application\Entity\Base\Entity as Entity;
use Application\Exception\ApplicationException;
use Doctrine\ORM\ORMInvalidArgumentException;

/**
 * Description of DAOBase
 *
 * @author francis.oliveira
 */
abstract class DAOBase implements DAO {    
    
    protected $entityManeger = null;
    
    public function __construct($entityManager) {
        $this->entityManeger = $entityManager;
    }

    public function delete(Entity $entity) {
        try {
            $this->getEntityManager()->remove($entity);
            $this->getEntityManager()->flush();
        } catch (ORMInvalidArgumentException $exc) {
            $this->roolback();
            throw $exc;
        }        
    }

    public function findAll() {
        
    }

    public function getById($id) {
        
    }

    public function save(Entity $entity) {
        try {
            $this->getEntityManager()->persist($entity);
            $this->getEntityManager()->flush();
            return $entity;
        } catch (ORMInvalidArgumentException $exc) {
            $this->roolback();
            throw $exc;
        }
    }

    public function commit() {
//        $this->getEntityManager()->commit();
    }

    public function roolback() {
//        $this->getEntityManager()->roolback();
        
    }

    public function update(Entity $entity) {
        try {
            $this->getEntityManager()->merge($entity);
            $this->getEntityManager()->flush();
        } catch (ORMInvalidArgumentException $exc) {
            $this->roolback();
            throw $exc;
        }                
    }

    public function getEntityManager() {        
        if ($this->entityManeger === null) {
            throw new ApplicationException('Entidade EntityManger nao esta instanciada');
        }
        return $this->entityManeger;
    }
    
}
