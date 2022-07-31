<?php

namespace App\Repository;

use Doctrine\ORM\EntityRepository;

class ClientRepository extends EntityRepository
{
    public function findAllOrderedByName()
    {
        return $this->getEntityManager()
        ->createQuery('SELECT c FROM AppBundle:Client c ORDER BY c.nom ASC')
        ->getResult();
    }
}
