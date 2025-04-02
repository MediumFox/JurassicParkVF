<?php

namespace App\Repository;

use App\Entity\LouerHotel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LouerHotel>
 */
class LouerHotelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LouerHotel::class);
    }

    public function updateNote($date, $value): int
    {
        return $this->getEntityManager()->createQueryBuilder()
            ->update(LouerHotel::class, 'l')
            ->set('l.note', ':value')
            ->where('l.date = :date')
            ->setParameter('value', $value)
            ->setParameter('date', $date ) 
            ->getQuery()
            ->execute();
    }

    
    public function noteHotel($hotelId): ?int
    {
        $result = $this->createQueryBuilder('l')
            ->select('AVG(l.note) as moyenne')
            ->join('l.chambre', 'c')
            ->join('c.hotel', 'h')
            ->where('h.id = :hotelId')
            ->andWhere('l.note IS NOT NULL')
            ->setParameter('hotelId', $hotelId)
            ->getQuery()
            ->getSingleScalarResult();
        return $result !== null ? (int) round($result) : null;
    }
    
    //    public function findOneBySomeField($value): ?LouerHotel
    //    {
    //        return $this->createQueryBuilder('l')
    //            ->andWhere('l.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
