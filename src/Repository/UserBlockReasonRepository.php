<?php

namespace App\Repository;

use App\Entity\UserBlockReason;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method UserBlockReason|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserBlockReason|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserBlockReason[]    findAll()
 * @method UserBlockReason[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserBlockReasonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserBlockReason::class);
    }

    // /**
    //  * @return UserBlockReason[] Returns an array of UserBlockReason objects
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
    public function findOneBySomeField($value): ?UserBlockReason
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
