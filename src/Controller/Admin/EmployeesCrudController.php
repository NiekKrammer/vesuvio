<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use App\Entity\Employees;

class EmployeesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Employees::class;
    }
}
