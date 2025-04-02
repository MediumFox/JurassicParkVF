<?php

namespace App\Repository;

use App\Entity\OuvertureRestaurant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OuvertureRestaurant>
 */
class OuvertureRestaurantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OuvertureRestaurant::class);
    }

    public function horaireRestaurant($restaurant): array
    {
        return $this->createQueryBuilder('o')
            ->select('j.libelleJour, h.ouverture, h.fermeture')
            ->join('o.jour', 'j')
            ->join('o.horaire', 'h')
            ->where('o.restaurant = :restaurant')
            ->setParameter('restaurant', $restaurant)
            ->orderBy('j.libelleJour', 'ASC')
            ->addOrderBy('h.ouverture', 'ASC')
            ->getQuery()
            ->getArrayResult();
    }
    

    //    /**
    //     * @return OuvertureRestaurant[] Returns an array of OuvertureRestaurant objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('o')
    //            ->andWhere('o.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('o.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?OuvertureRestaurant
    //    {
    //        return $this->createQueryBuilder('o')
    //            ->andWhere('o.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
