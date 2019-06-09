<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Kamer;
use App\Entity\Image;

class KamersController extends AbstractController
{
    /**
     * @Route("/kamers", name="kamers")
     */
    public function index()
    {
        $kamers = $this->getDoctrine()->getRepository(Kamer::class)->findall();
        $images = $this->getDoctrine()->getRepository(Image::class)->findall();

        return $this->render('kamers/index.html.twig', [
            'controller_name' => 'KamersController',
            'kamers' => $kamers,
            'images' => $images,
        ]);
    }

}
