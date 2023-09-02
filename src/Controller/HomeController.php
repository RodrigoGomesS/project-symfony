<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    public $categories = [
        ['title' => 'Mundo', 'text' => 'Notícias sobre o Mundo'],
        ['title' => 'Brasil', 'text' => 'Notícias sobre o Brasil'],
        ['title' => 'Tecnologia', 'text' => 'Notícias sobre Tecnologia'],
        ['title' => 'Design', 'text' => 'Notícias sobre Design'],
        ['title' => 'Cultura', 'text' => 'Notícias sobre Cultura'],
        ['title' => 'Negócios', 'text' => 'Notícias sobre Negócios'],
        ['title' => 'Política', 'text' => 'Notícias sobre Política'],
        ['title' => 'Opinião', 'text' => 'Notícias sobre Opinião'],
        ['title' => 'Ciência', 'text' => 'Notícias sobre Ciência'],
        ['title' => 'Saúde', 'text' => 'Notícias sobre Saúde'],
        ['title' => 'Estilo', 'text' => 'Notícias sobre Estilo de Vida'],
        ['title' => 'Viagens', 'text' => 'Notícias sobre Viagens'],
    ];

    #[Route('/', name: 'app_home')]
    public function index(): Response
    {

        $pageTitle = 'Sistema de Notícias';

        return $this->render('home/index.html.twig', [
            'pageTitle' => $pageTitle,
            'categories' => $this->categories
        ]);
    }

    #[Route('/categoria/{slug}', name: 'app_category')]
    public function category(string $slug = null): Response
    {
        $pageTitle = $slug;

        return $this->render('home/category.html.twig', [
            'pageTitle' => $pageTitle,
            'categories' => $this->categories
        ]);
    }
}
