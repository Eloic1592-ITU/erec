<?php

namespace App\Repository;

use App\Entity\FieldOfStudy;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FieldOfStudy>
 */
class FieldOfStudyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FieldOfStudy::class);
    }

    /**
     * Count all field of studies
     * @return int
     */
    public function countAllFieldStudies(): int
    {
        $qb = $this->createQueryBuilder('fs');
        $qb->select('COUNT(fs.id) as _TOTAL');
        $result = $qb->getQuery()->getArrayResult();
        return !empty($result) ? (int)$result[0]['_TOTAL'] : 0;
    }

    //    /**
    //     * @return FieldOfStudy[] Returns an array of FieldOfStudy objects
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

    //    public function findOneBySomeField($value): ?FieldOfStudy
    //    {
    //        return $this->createQueryBuilder('f')
    //            ->andWhere('f.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
