<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HelloWorld extends AbstractController {

	/**
      * @Route("/hello-world")
      */

	public function hello() {
		return $this->render('hello/hello-world.html.twig');
	}

	/**
      * @Route("/hello-world/{nom}")
      */

	public function helloworld($nom) {
    		  return $this->render('hello/hello-world2.html.twig', [
            'nom' => $nom
        ]);
}


}




















?>