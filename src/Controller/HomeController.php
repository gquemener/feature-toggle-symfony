<?php

declare(strict_types=1);

namespace App\Controller;

use App\Service\GreetingService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    public function __construct(
        private GreetingService $greetingService,
    ) {
    }

    #[Route(path: '/greet', methods: 'GET')]
    public function __invoke(Request $request): Response
    {
        $greeting = $this->greetingService->greet($request->query->get('name', 'World'));

        return $this->render('greet.html.twig', ['greeting' => $greeting]);
    }
}
