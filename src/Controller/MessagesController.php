<?php

namespace App\Controller;

use Monolog\Logger;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MessagesController extends AbstractController
{
    /**
     * @Route("/messages/{id}/like/{direction<like|dislike>}")
     */

    public function messagesLike($id,$direction, LoggerInterface $logger)
    {
        if($direction == 'like'){
            $logger->info('Houve um like!');
            $currentLike = rand(80,200);
        } else {
            $logger->info('Houve um dislike!');
            $currentLike = rand(10,20);
        }

        return $this->json(['likes' => $currentLike]);
    }
}