<?php

namespace App\Repository;

use App\Entity\UserBlacklist;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method UserBlacklist|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserBlacklist|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserBlacklist[]    findAll()
 * @method UserBlacklist[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserBlacklistRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserBlacklist::class);
    }

    // /**
    //  * @return UserBlacklist[] Returns an array of UserBlacklist objects
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
    public function findOneBySomeField($value): ?UserBlacklist
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
