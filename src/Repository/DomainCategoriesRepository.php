<?php

namespace App\Repository;

use App\Entity\DomainCategories;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method DomainCategories|null find($id, $lockMode = null, $lockVersion = null)
 * @method DomainCategories|null findOneBy(array $criteria, array $orderBy = null)
 * @method DomainCategories[]    findAll()
 * @method DomainCategories[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DomainCategoriesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DomainCategories::class);
    }

    // /**
    //  * @return DomainCategories[] Returns an array of DomainCategories objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    public function findOneByName($value): ?DomainCategories
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.name = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

}
