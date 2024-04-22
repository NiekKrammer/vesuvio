<?php

namespace App\Controller;

use App\Entity\Order;
use App\Entity\Products;
use App\Form\ContactFormType;
use App\Repository\OrderItemsRepository;
use Exception;
use PHPMailer\PHPMailer\PHPMailer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Security;

class DefaultController extends AbstractController
{
    private $entityManager;
    private $security;

    public function __construct(EntityManagerInterface $entityManager, Security $security)
    {
        $this->entityManager = $entityManager;
        $this->security = $security;
    }

    #[Route('/', name: 'app_default')]
    public function index(): Response
    {
        $productsRepository = $this->entityManager->getRepository(Products::class);
        $products = $productsRepository->findBy(['available' => true]);

        $isLoggedIn = $this->security->isGranted('ROLE_USER');

        return $this->render('homepage.html.twig', [
            'controller_name' => 'DefaultController',
            'products' => $products,
            'isLoggedIn' => $isLoggedIn,
        ]);
    }

    #[Route('/bestellingen', name: 'app_order_history')]
    public function viewOrders(): Response
    {
        $user = $this->getUser();
        $orders = $this->entityManager->getRepository(Order::class)->findBy(['username' => $user]);

        return $this->render('order_history.html.twig', [
            'orders' => $orders,
        ]);
    }

}
