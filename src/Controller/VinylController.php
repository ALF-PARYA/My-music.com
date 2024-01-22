<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;
class VinylController
{
    #[Route('/')]
    public function homepage()
    {
        return new Response('Title: "PB and Jams"');
    }

    #[Route('/browse/{slug}')]
    public function browse( string $slug = null): Response 
    {
        if($slug){
            $title = 'Genre'.u(str_replace('-', ' ', $slug))->title(true);
        }else{
            $title = 'Tous les genres';
        }
            return new Response($title);
    }

}