<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class MamiferoController extends AbstractController
{    
    /**
     *  @Route("/",name="app_home_page")
     * 
    **/
  

    public function homepage(Environment $twigEnvironment)
    {

        /*
        $html = $twigEnvironment->render('mamiferos/homepage.html.twig');
        return new Response($html);
        */
        return $this->render('mamiferos/homepage.html.twig');
    }

    /** 
     * @Route("/mamifero/{slug}")
     * 
    **/

    public function show($slug)
    {   
        $respostas = [
            'Esta é a primeira resposta',
            'Esta é a segunda resposta',
            'Esta é a terceira resposta',
            'Esta é a quarta resposta',
            'Esta é a quinta resposta',
            'Esta é a sexta resposta',
            'Esta é a sexta resposta'
        ];

        // utilizar o var_dump();exit; nas versões legadas.
        // dump(); faz o mesmo que dd();

        //dd($respostas,$this);
        return $this->render('mamiferos/show.html.twig',[
            'animal' => ucwords(str_replace('-',' ',$slug)),
            'respostas' => $respostas
        ]);

        /*
        return new Response(
            sprintf(
                'Esta é uma página de detalhe do mamifero: "%s"',
                ucwords(str_replace('-',' ',$slug))
            ));
        */
    }
}