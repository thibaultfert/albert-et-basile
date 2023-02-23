<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CoreController extends AbstractController
{
    #[Route('/product', name: 'app_product')]
    public function product(): Response
    {
        return $this->render('core/product.html.twig');
    }

    #[Route('/', name: 'app_home')]
    public function home() {
        return $this->render('core/home.html.twig');
    }
}
