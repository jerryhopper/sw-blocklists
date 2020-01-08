<?php

namespace App\Repository;

use App\Entity\BlockLists;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Collections\Criteria;
use Doctrine\Common\Collections\ExpressionBuilder;
use Doctrine\Common\Persistence\ManagerRegistry;


/**
 * @method BlockLists|null find($id, $lockMode = null, $lockVersion = null)
 * @method BlockLists|null findOneBy(array $criteria, array $orderBy = null)
 * @method BlockLists[]    findAll()
 * @method BlockLists[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BlockListsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BlockLists::class);
    }

    /**
     * @return BlockLists[] Returns an array of BlockLists objects
     */
    public function XXXfxindByUser($userid)
    {
        return $this->createQueryBuilder('b')
        ->andWhere('b.user_id = :user_id')
        ->setParameter('user_id', $userid)
        ->setMaxResults(1000000)
        ->getQuery()
        ->getResult()
        ;
    }


    /**
     * @return BlockLists[] Returns an array of BlockLists objects
     */
    public function findByUser($userid)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.user_id = :user_id')
            ->setParameter('user_id', $userid)
            ->setMaxResults(1000000)
            ->getQuery()
            ->getResult()
            ;
    }

    /**
     * @return BlockLists[] Returns an array of BlockLists objects
     */
    public function findListByUser($userid)
    {
        $criteria = new Criteria();
        // get an ExpressionBuilder instance, so that you
        $exprBuilder = new ExpressionBuilder();

        // create a subquery in order to take all address records for a specified user id
/*
        $sub = $this->createQueryBuilder('a')

            ->from('block_lists', 'b')
            ->where('a.user_id = :user_id')
            ->setParameter('user_id', $userid);
*/
        //$qb = $this->createQueryBuilder('d')

            //->from('domains', 'd');


//            ->where($sub->getDQL());
        //    ->where($expr->not($expr->exists($sub->getDQL())));

       // $res = $qb->getQuery()->getResult();




        return $this->createQueryBuilder('b')
            ->andWhere('b.user_id = :user_id')
            ->setParameter('user_id', $userid)
            ->setMaxResults(1000000)
            ->getQuery()
            ->getResult()
            ;
    }



    /*
    */

    /*
    public function findOneBySomeField($value): ?BlockLists
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
