<?php

namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SiteController extends AbstractController
{
	/**
	 * @Route("/lucky/number")
	 */
	public function number()
	{
		return "hello";
	}

}