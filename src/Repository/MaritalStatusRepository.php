<?php

namespace App\Repository;

use App\Entity\MaritalStatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MaritalStatus>
 */
class MaritalStatusRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MaritalStatus::class);
    }

    /**
     * Count all martial status
     * @return int
     */
    public function countMartialStatus(): int
    {
        $qb = $this->createQueryBuilder('ms');
        $qb->select('COUNT(ms.id) as _TOTAL');
        $result = $qb->getQuery()->getArrayResult();
        return !empty($result) ? (int)$result[0]['_TOTAL'] : 0;
    }

    //    /**
    //     * @return MaritalStatus[] Returns an array of MaritalStatus objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('m')
    //            ->andWhere('m.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('m.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?MaritalStatus
    //    {
    //        return $this->createQueryBuilder('m')
    //            ->andWhere('m.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
