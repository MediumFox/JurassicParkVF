<?php

namespace App\Repository;

use App\Entity\Biome;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Biome>
 */
class BiomeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Biome::class);
    }

    //    /**
    //     * @return Biome[] Returns an array of Biome objects
    //     */
       public function filterName(string $value): array
       {
           return $this->createQueryBuilder('b')
               ->andWhere('b.libelleBiome like :val')
               ->setParameter('val', '%' . $value . '%')
               ->orderBy('b.id', 'ASC')
               ->getQuery()
               ->getResult()
           ;
       }

    //    public function findOneBySomeField($value): ?Biome
    //    {
    //        return $this->createQueryBuilder('b')
    //            ->andWhere('b.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
