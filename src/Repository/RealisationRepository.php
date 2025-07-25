<?php

namespace App\Repository;

use App\Entity\Realisation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Realisation>
 */
class RealisationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Realisation::class);
    }
    public function findLastThreeRealisations()
    {
        return $this->createQueryBuilder('r')
            ->orderBy('r.id', 'DESC') 
            ->setMaxResults(3)
            ->getQuery()
            ->getResult();
    }

    public function findAllOrderedByDate()
    {
        return $this->createQueryBuilder('r')
            ->orderBy('r.id', 'DESC')
            ->getQuery()
            ->getResult();
    }
    //    /**
    //     * @return Realisation[] Returns an array of Realisation objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('r.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Realisation
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
