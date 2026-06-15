<?php

namespace App\Repository;

use App\Entity\Internship;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Internship>
 */
class InternshipRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Internship::class);
    }

    /**
     * Count all Internship
     * @return int
     */
    public function countAllInternship(): int
    {
        $qb = $this->createQueryBuilder('it');
        $qb->select('COUNT(it.id) as _TOTAL');
        $result = $qb->getQuery()->getArrayResult();
        return !empty($result) ? (int)$result[0]['_TOTAL'] : 0;
    }

    //    /**
    //     * @return Internship[] Returns an array of Internship objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('i')
    //            ->andWhere('i.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('i.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Internship
    //    {
    //        return $this->createQueryBuilder('i')
    //            ->andWhere('i.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
