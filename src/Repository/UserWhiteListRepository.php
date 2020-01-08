<?php

namespace App\Repository;

use App\Entity\UserWhiteList;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method UserWhiteList|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserWhiteList|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserWhiteList[]    findAll()
 * @method UserWhiteList[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserWhiteListRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserWhiteList::class);
    }

    // /**
    //  * @return UserWhiteList[] Returns an array of UserWhiteList objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UserWhiteList
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
