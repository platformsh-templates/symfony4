<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DisplayController extends AbstractController
{
    /**
     * @Route("/lucky/number")
     */
    public function display()
    {
    

        return $this->render('lucky/display.html.twig', []);
    }
} 
