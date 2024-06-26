<?php

namespace App\Controller\Admin;

use App\Entity\Products;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ProductsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Products::class;
    }

    public function configureFields(string $pageName): iterable
    {
        yield IdField::new('id')->setLabel('id')->setFormTypeOption('disabled', true);
        yield BooleanField::new('available')->setLabel('beschikbaar')->setFormTypeOption('data', true);
        yield Field::new('name')->setLabel('naam');
        yield Field::new('purchase_price')->setLabel('aankoopprijs');
        yield Field::new('sell_price')->setLabel('verkoopprijs');
        yield Field::new('quantity')->setLabel('op voorraad');
        yield Field::new('quantity_selled')->setLabel('aantal verkocht');
        yield Field::new('revenue')->setLabel('omzet');
        yield Field::new('total_revenue')->setLabel('totaal omzet maand');

    }

}
