<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
   #[Route('/', name: 'Acceuil')] //menu//
  public function index(): Response
  {
	$navItems = [
		['url' => '/', 'label' => 'Acceuil'],
		['url' => '/Acces aux covoiturages', 'label' => 'Covoiturage'],
		['url' => '/connexion', 'label' => 'Connexion'],
		['url' => '/contact', 'label' => 'Contact']
	];
	return $this->render('base.html.twig', [
    	  	'navItems' => $navItems,
	]);
  
}
}