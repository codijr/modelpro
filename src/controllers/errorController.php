<?php
namespace ModelPro\Controllers;

class ErrorController extends AbstractController{
    public function notFound () {
        $properties = ['errorMessage' => 'Pagina não encontrada :('];
        return $this->render('error.twig', $properties);
    }

    public function login () {
        $properties = ['errorMessage' => 'Você deve está logado para acessar essa página! >:(]'];
        return $this->render('error.twig', $properties);
    }
}