<?php

namespace App\Repository;

use App\Entity\Dinosaure;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dinosaure>
 */
class DinosaureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dinosaure::class);
    }

       /**
        * @return Dinosaure[] Returns an array of Dinosaure objects
        */
        public function filterName(?string $libelle, ?string $regime, ?string $ere): array
        {
            $qb = $this->createQueryBuilder('d');
        
            if ($libelle) {
                $qb->andWhere('d.libelleDinosaure LIKE :val1')
                   ->setParameter('val1', '%' . $libelle . '%');
            }

            if ($ere) {
                $qb->andWhere('d.ereDinosaure  = :val3')
                ->setParameter('val3', $ere);
            }
        
            if ($regime) {
                $qb->andWhere('d.regimeDinosaure = :val2')
                   ->setParameter('val2', $regime);
            }
        
            return $qb->orderBy('d.libelleDinosaure', 'ASC')
                      ->getQuery()
                      ->getResult();
        }

        public function findNextId(int $currentId): ?Dinosaure
        {
            return $this->createQueryBuilder('d')
                ->andWhere('d.id > :currentId')
                ->setParameter('currentId', $currentId)
                ->orderBy('d.id', 'ASC')
                ->setMaxResults(1)
                ->getQuery()
                ->getOneOrNullResult();
        }

        public function findPreviousId(int $currentId): ?Dinosaure
        {
        return $this->createQueryBuilder('d')
            ->andWhere('d.id < :currentId')
            ->setParameter('currentId', $currentId)
            ->orderBy('d.id', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
        }
}
