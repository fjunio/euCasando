<?php

namespace Dashboard\DAO;

use Dashboard\Entity\Convidado;
use Doctrine\ORM\EntityManager;

/**
 *
 * @author francis.oliveira
 */
interface ConvidadoDAO {  
    
    public function startTransaction();
    public function saveEntity(EntityManager $entity, Convidado $convidado);
    public function deleteEntity(EntityManager $entity, Convidado $convidado);
    public function getListByCasamentoId($id);
    public function commitWork(EntityManager $entity);
    public function roolbackWork(EntityManager $entity);
    
}
