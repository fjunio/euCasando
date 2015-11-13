<?php

namespace Dashboard\DAO;

use Dashboard\Entity\PlanejadorFinanceiro;
use Doctrine\ORM\EntityManager;


/**
 *
 * @author francis.oliveira
 */
interface PlanejadorFinanceiroDAO {
    public function startTransaction();
    public function saveEntity(EntityManager $entity, PlanejadorFinanceiro $convidado);
    public function deleteEntity(EntityManager $entity, PlanejadorFinanceiro $convidado);
    public function getListByCasamentoId($id);
    public function commitWork(EntityManager $entity);
    public function roolbackWork(EntityManager $entity);
}
