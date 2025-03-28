<?php

namespace App\Repository;

use App\Entity\Chambre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\Query\Limit;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Chambre>
 */
class ChambreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Chambre::class);
    }
    public function findChamberReservation($hotel, $chambre): ?Chambre
    {

        return $this->createQueryBuilder('c')
            ->andWhere('c.hotel = :val1')
            ->setParameter('val1', $hotel)
            ->andWhere('c.formatChambre = :val2')
            ->setParameter('val2', $chambre)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function filterName(string $value): array
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.numeroChambre like :val')
            ->setParameter('val', '%' . $value . '%')
            ->orderBy('b.id', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }

    //    public function findOneBySomeField($value): ?Chambre
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
