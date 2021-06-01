<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
     #[Route('/', name: 'conference')]
    // @Route("/", name="homepage")
    // public function index(): Response
    public function index() 
    {
        $number = random_int(0, 100);
        return $this->render('numeros.html.twig', [
            'number' => $number ]);

        /*
        return $this->render('conference/index.html.twig', [
         'controller_name' => 'ConferenceController',
        ]);
       return new Response(<<<EOF
      
       <html>
           <body>
               <img src="/images/under-construction.gif" />

       
           </body>
       
       </html>
     EOF  
    ); */
    }
}
