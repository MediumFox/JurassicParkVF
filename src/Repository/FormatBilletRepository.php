<?php

namespace App\Repository;

use App\Entity\FormatBillet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FormatBillet>
 */
class FormatBilletRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FormatBillet::class);
    }

    public function filterName(string $value): array
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.libelleBillet like :val')
            ->setParameter('val', '%' . $value . '%')
            ->orderBy('b.id', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }

    //    /**
    //     * @return FormatBillet[] Returns an array of FormatBillet objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('f')
    //            ->andWhere('f.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('f.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?FormatBillet
    //    {
    //        return $this->createQueryBuilder('f')
    //            ->andWhere('f.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
