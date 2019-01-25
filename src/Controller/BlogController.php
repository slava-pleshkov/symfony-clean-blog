<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BlogController extends AbstractController
{
	public function index()
	{
		$number = [
			0 => [
				'title' => 'title 1',
				'subtitle' => 'Subtitle 1',
				'author' => 'Author 1',
				'urlname' => 'urlname1',
			],
			1 => [
				'title' => 'title 1',
				'subtitle' => 'Subtitle 1',
				'author' => 'Author 1',
				'urlname' => 'urlname1',
			],
			2 => [
				'title' => 'title 2',
				'subtitle' => 'Subtitle 2',
				'author' => 'Author 2',
				'urlname' => 'urlname2',
			],
			3 => [
				'title' => 'title 3',
				'subtitle' => 'Subtitle 3',
				'author' => 'Author 3',
				'urlname' => 'urlname3',
			],
			4 => [
				'title' => 'title 4',
				'subtitle' => 'Subtitle 4',
				'author' => 'Author 4',
				'urlname' => 'urlname4',
			],
			5 => [
				'title' => 'title 5',
				'subtitle' => 'Subtitle 5',
				'author' => 'Author 5',
				'urlname' => 'urlname5',
			],
		];
		return $this->render('site/blog/index.html.twig', ['blogs' => $number]);
	}
}