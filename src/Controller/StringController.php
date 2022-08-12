<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class StringController extends AbstractController
{
    #[Route('/string/{s}', name: 'app_string')]
    public function index($s): JsonResponse
    {
        $array1 = $array2 = array_count_values(str_split($s));
        rsort($array2);
        $char =  array_search($array2[1], $array1 );
        return $this->json([
            $char => $array2[1],
        ]);
    }
}
