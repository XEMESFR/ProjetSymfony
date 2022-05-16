<?php

namespace App\Controller;

use Doctrine\ORM\Mapping\Driver\RepeatableAttributeCollection;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class Vinyl
{
    #[Route('/')]
    public function test () : Response
    {
        return new \Symfony\Component\HttpFoundation\Response('Salt');
    }

    #[Route('/browse/{slug}')]
    public function display (string $slug =null) : Response
    {
       if ($slug)
        {
            $title = 'Genre : ' .u(str_replace('-', ' ', $slug)) ->title(true) ;
        }
        else
        {
            $title = 'All Genres';
        }
        return new \Symfony\Component\HttpFoundation\Response( $title);
    }

}