<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Product>
 *
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    public function save(Product $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Product $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findLatestFourProducts()
    {
        return $this->createQueryBuilder('p')
            ->orderBy('p.createdAt', 'DESC')
            ->setMaxResults(4)
            ->getQuery()
            ->getResult();
    }


    public function getCreatedAtFormatted(): array
    {
        $qb = $this->createQueryBuilder('p')
            ->select('p.id', 'p.createdAt')
            ->getQuery();

        $results = $qb->getResult();

        $formattedResults = [];

        foreach ($results as $result) {
            $createdAt = $result['createdAt'];
            $now = new \DateTimeImmutable();

            $interval = $now->diff($createdAt);

            if ($interval->d >= 1) {
                $timeAgo = $interval->format('Créé il y a %d jours');
            } elseif ($interval->h >= 1) {
                $timeAgo = $interval->format('Créé il y a %h heures');
            } elseif ($interval->i >= 1) {
                $timeAgo = $interval->format('Créé il y a %i minutes');
            } else {
                $timeAgo = 'Créé il y a quelques secondes';
            }

            $formattedResults[$result['id']] = [
                'time_ago' => $timeAgo,
            ];
        }

        return $formattedResults;
    }




//    /**
//     * @return Product[] Returns an array of Product objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Product
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
