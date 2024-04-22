<?php
// UserCrudController.php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use App\Entity\User;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            Field::new('id', 'ID'),
            Field::new('username', 'Gebruikersnaam'),
            Field::new('password', 'Wachtwoord'),
            Field::new('email', 'E-mail'),
            ArrayField::new('roles', 'Rollen'),
            Field::new('created_at', 'Aangemaakt op'),
        ];
    }
}
