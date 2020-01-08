<?php

namespace App\Repository;

use App\Entity\UserUnblockReason;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method UserUnblockReason|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserUnblockReason|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserUnblockReason[]    findAll()
 * @method UserUnblockReason[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserUnblockReasonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserUnblockReason::class);
    }

    // /**
    //  * @return UserUnblockReason[] Returns an array of UserUnblockReason objects
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
    public function findOneBySomeField($value): ?UserUnblockReason
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
