<?php

namespace App\Controller\Api;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/api/articles", name="api_articles", methods={"GET"})
     */
    public function index(ArticleRepository $articleRepository): JsonResponse
    {
        $articles = $articleRepository->findAll();

        return $this->json($articles, 200, [], ['groups' => 'article']);
    }
}
