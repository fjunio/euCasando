<?php

namespace Dashboard\DAO;

use Application\Entity\Base\Entity;
use Doctrine\ORM\EntityManager;

/**
 *
 * @author francis.oliveira
 */
interface MensagemDAO {    
    
    public function startTransaction();
    public function saveEntity(EntityManager $entityManager, Entity $entity);
    public function deleteEntity(EntityManager $entityManager, Entity $entity);
    public function getOneByCasamentoId($id);
    public function commitWork(EntityManager $entityManager);
    public function roolbackWork(EntityManager $entityManager);
    public function getConfigById($idConfig);

    
}
