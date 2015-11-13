<?php

namespace Application\DAO\DAOBase;

use Application\Entity\Base\Entity as Entity;

/**
 *
 * @author francis.oliveira
 */
interface DAO {
    
    /*
     * Metodo que retorna uma instancia do mapeamento Entity Manager
     */
    public function getEntityManager();
    
    public function save(Entity $entity);
    
    public function delete(Entity $entity);
    
    public function getById($id);
    
    public function findAll();
    
    public function update(Entity $entity);
    
    public function getRepository();
    
    public function commit();
    
    public function roolback();
}
