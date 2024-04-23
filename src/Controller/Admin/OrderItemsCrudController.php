<?php
namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use App\Entity\OrderItems;

class OrderItemsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return OrderItems::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('order_item_id', 'bestellingsnummer'),
            Field::new('item', 'items'),
            Field::new('price', 'totale prijs'),
            Field::new('packed', 'status'),
        ];
    }
}
