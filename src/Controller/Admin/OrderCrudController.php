<?php
namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use App\Entity\Order;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;

class OrderCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Order::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            yield IdField::new('id')->setLabel('id')->setFormTypeOption('disabled', true),
            yield Field::new('company_name', 'bedrijfsnaam'),
            yield Field::new('recipidient', 'ontvanger'),
            yield Field::new('country', 'land'),
            yield Field::new('email', 'e-mail'),
            yield Field::new('phoneNr', 'telefoonnummer'),
            yield Field::new('postcode', 'postcode'),
            yield Field::new('huisnummer', 'huisnummer'),
            yield Field::new('city', 'stad'),
            yield Field::new('straatnaam', 'straatnaam'),
            yield Field::new('date', 'afspraak Datum'),
            yield Field::new('ordered_at', 'besteld op'),
            yield Field::new('status', 'status'),
            yield AssociationField::new('username', 'gebruikersnaam')->formatValue(function ($value, $entity) {
                return $value ? $value->getUsername() : '';
            }),
        ];
    }

}
