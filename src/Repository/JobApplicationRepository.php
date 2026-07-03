<?php

namespace App\Repository;

use App\Entity\JobApplication;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\User;
use App\Entity\Campaign;

/**
 * @extends ServiceEntityRepository<JobApplication>
 */
class JobApplicationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, JobApplication::class);
    }

    //    /**
    //     * @return JobApplication[] Returns an array of JobApplication objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('j')
    //            ->andWhere('j.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('j.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?JobApplication
    //    {
    //        return $this->createQueryBuilder('j')
    //            ->andWhere('j.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }

    // JobApplicationRepository.php

    public function findByUser(User $user): array
    {
        return $this->createQueryBuilder('ja')
            ->where('ja.user = :user')
            ->setParameter('user', $user)
            ->orderBy('ja.id', 'DESC') 
            ->getQuery()
            ->getResult();
    }

    // Verifie si l'utilisateur a déjà postulé à un poste dans la campagne
    public function findOneByCampaignAndUser(Campaign $campaign, User $user): ?JobApplication
    {
        return $this->createQueryBuilder('ja')
            ->join('ja.position', 'p')
            ->where('ja.user = :user')
            ->andWhere('p.campaign = :campaign')
            ->setParameter('user', $user)
            ->setParameter('campaign', $campaign)
            ->getQuery()
            ->getOneOrNullResult();
    }
}
