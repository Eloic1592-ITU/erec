<?php

namespace App\Repository;

use App\Entity\Civility;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Civility>
 */
class CivilityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Civility::class);
    }

    /**
     * Count all civility
     * @return int
     */
    public function countCivility(): int
    {
        $qb = $this->createQueryBuilder('cv');
        $qb->select('COUNT(cv.id) as _TOTAL');
        $result = $qb->getQuery()->getArrayResult();
        return !empty($result) ? (int)$result[0]['_TOTAL'] : 0;
    }
    //    /**
    //     * @return Civility[] Returns an array of Civility objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('c.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Civility
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
