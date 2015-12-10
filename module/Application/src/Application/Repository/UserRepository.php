<?php
namespace Application\Repository;

use Doctrine\ODM\MongoDB\DocumentRepository;
use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Query\Builder;

class UserRepository extends DocumentRepository
{
    public function findUserById($id)
    {
        return $this->findOneBy(array('id' => new \MongoId($id)));
    }

    public function findAll()
    {
        return parent::findAll();
    }

    public function count()
    {
        return $this->createQueryBuilder()
            ->getQuery()
            ->execute()
            ->count();
    }

    public function findAllOrderedByName()
    {
        return $this->createQueryBuilder()
            ->sort('name', 'ASC')
            ->getQuery()
            ->execute();
    }
}