<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            yield IdField::new('id')->setLabel('id')->setFormTypeOption('disabled', true),
            yield Field::new('username', 'Gebruikersnaam'),
            yield Field::new('password', 'Wachtwoord'),
            yield Field::new('email', 'E-mail'),
            yield ArrayField::new('roles', 'Rollen'),
            yield Field::new('created_at', 'Aangemaakt op'),
        ];
    }
}
