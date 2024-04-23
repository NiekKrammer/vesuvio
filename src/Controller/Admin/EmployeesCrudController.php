<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use App\Entity\Employees;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;

class EmployeesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Employees::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            yield IdField::new('id')->setLabel('id')->setFormTypeOption('disabled', true),
            yield Field::new('name', 'naam'),
            yield Field::new('adres', 'adres'),
            yield Field::new('phonenumber', 'telefoonnummer'),
            yield Field::new('work_function', 'functie'),
            yield Field::new('username', 'gebruikersnaam'),
            yield Field::new('password', 'wachtwoord'),
            yield Field::new('roles', 'rollen'),
        ];
    }
}
