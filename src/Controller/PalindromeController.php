<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class PalindromeController extends AbstractController
{
    #[Route('/palindrome/{s}', name: 'app_palindrome')]
    public function index($s): JsonResponse
    {
        if($s == strrev($s)) {
            $result = [$s => "палиндром"];
        } else {
            $result = [$s => "не палиндром"];
        }

        return $this->json(
            $result
        );
    }
}
