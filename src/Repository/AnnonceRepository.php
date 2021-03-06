<?php

namespace App\Repository;

use App\Entity\Annonce;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Annonce|null find($id, $lockMode = null, $lockVersion = null)
 * @method Annonce|null findOneBy(array $criteria, array $orderBy = null)
 * @method Annonce[]    findAll()
 * @method Annonce[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AnnonceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Annonce::class);
    }


    public function findBestAnnonces($limit)
    {
        return $this->createQueryBuilder('a')
            ->select('a as annonce, AVG(c.rating) as avgRating')
            ->join('a.comments', 'c')
            ->groupBy('a')
            ->orderBy('avgRating', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

 
 
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.title LIKE :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    
public function findLike($key) {
        $query = $this->getEntityManager()
                ->createQuery("
                SELECT a FROM App\Entity\Annonce a
                WHERE a.title LIKE :key "
        );
        $query->setParameter('key', '%' . $key . '%');
        return $query->getResult();
    }
    
    public function findOneBySomeField($value): ?Annonce
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.title LIKE :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    
}
