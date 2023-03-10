<?php

namespace App\Controller\Admin;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserCrudController extends AbstractCrudController
{
//    private $passwordHasher;
//    public function construct(UserPasswordHasherInterface $passwordHasher) {
//        $this->passwordHasher = $passwordHasher;
//    }

    /**
     * Summary of __construct
     * @param UserPasswordHasherInterface $userPasswordHasherInterface
     */
    public function __construct(private UserPasswordHasherInterface $userPasswordHasherInterface){}

    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnDetail(),
            TextField::new('username'),
            TextField::new('password'),
            TextField::new('email'),
            ArrayField::new('roles'),
        ];
    }
    /**
     * Surcharge de la méthode parent qui s'occupe de la persistance
     * @param EntityManagerInterface $entityManager
     * @param User $entityInstance
     */
    public function persistEntity(EntityManagerInterface $entityManager, $entityInstance): void
    {
        $passwordHash = $this->userPasswordHasherInterface->hashPassword($entityInstance, $entityInstance->getPassword());

        $entityInstance->setPassword($passwordHash);
        parent::persistEntity($entityManager, $entityInstance);
    }
//    public function persistEntity(EntityManagerInterface $entityManager, $entityInstance, UserPasswordHasherInterface $passwordHasher): void
//    {
//        $hash = $this->passwordHasher->hashPassword(
//            $entityInstance,
//            $entityInstance->password
//        );
//        $entityInstance->setPassword($hash);
//        dd($entityInstance);
//        $entityManager->persist($entityInstance);
//        $entityManager->flush();
//    }
}
