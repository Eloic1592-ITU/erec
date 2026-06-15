<?php

namespace App\Repository;

use App\Entity\Degree;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Degree>
 */
class DegreeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Degree::class);
    }

    /**
     * Count all degree
     * @return int
     */
    public function countDegree(): int
    {
        $qb = $this->createQueryBuilder('dr');
        $qb->select('COUNT(dr.id) as _TOTAL');
        $result = $qb->getQuery()->getArrayResult();
        return !empty($result) ? (int)$result[0]['_TOTAL'] : 0;
    }

    //    /**
    //     * @return Degree[] Returns an array of Degree objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('d')
    //            ->andWhere('d.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('d.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Degree
    //    {
    //        return $this->createQueryBuilder('d')
    //            ->andWhere('d.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
