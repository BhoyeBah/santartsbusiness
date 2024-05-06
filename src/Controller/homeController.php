<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
class homeController extends AbstractController
    {
        #[Route('/accueil', name: 'accueil')]
        public function accueil(Request $request): Response
        {
           return $this->render('santart/accueil.html.twig');
        }

        #[Route('/about', name: 'about')]
        public function about(Request $request): Response
        {
           return $this->render('santart/about.html.twig');
        }

        #[Route('/evenement', name: 'evenement')]
        public function evenement(Request $request): Response
        {
        return $this->render('santart/evenement.html.twig');
        }

        #[Route('/service', name: 'service')]
        public function service(Request $request): Response
        {
        return $this->render('santart/service.html.twig');
        }

        #[Route('/shop', name: 'shop')]
        public function shop(Request $request): Response
        {
           return $this->render('santart/shop.html.twig');
        }

        #[Route('/galerie', name: 'galerie')]
        public function galerie(Request $request): Response
        {
           return $this->render('santart/galerie.html.twig');
        }
        #[Route('/contact', name: 'contact')]
        public function contact(Request $request): Response
        {
           return $this->render('santart/contact.html.twig');
        }
    }
