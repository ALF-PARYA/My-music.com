<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class VinylController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function homepage()
    {
        $tracks = [
            ['song' => 'Bohemian Rhapsody', 'artist' => 'Queen', 'date' => '25/01/2024', 'Duration' => '5:55'],
            ['song' => 'Stairway to Heaven', 'artist' => 'Led Zeppelin', 'date' => '25/01/2024', 'Duration' => '8:02'],
            ['song' => 'Imagine', 'artist' => 'John Lennon', 'date' => '25/01/2024', 'Duration' => '3:03'],
            ['song' => 'Billie Jean', 'artist' => 'Michael Jackson', 'date' => '25/01/2024', 'Duration' => '4:54'],
            ['song' => 'Like a Rolling Stone', 'artist' => 'Bob Dylan', 'date' => '25/01/2024', 'Duration' => '6:13'],
            ['song' => 'I Want to Hold Your Hand', 'artist' => 'The Beatles', 'date' => '25/01/2024', 'Duration' => '2:24'],
            ['song' => 'Hotel California', 'artist' => 'Eagles', 'date' => '25/01/2024', 'Duration' => '6:30'],
            ['song' => 'Smells Like Teen Spirit', 'artist' => 'Nirvana', 'date' => '25/01/2024', 'Duration' => '5:01'],
            ['song' => 'Sweet Child o\' Mine', 'artist' => 'Guns N\' Roses', 'date' => '25/01/2024', 'Duration' => '5:56'],
            ['song' => 'Every Breath You Take', 'artist' => 'The Police', 'date' => '25/01/2024', 'Duration' => '4:13'],
            ['song' => 'Purple Haze', 'artist' => 'Jimi Hendrix', 'date' => '25/01/2024', 'Duration' => '2:52'],
            ['song' => 'Hey Jude', 'artist' => 'The Beatles', 'date' => '25/01/2024', 'Duration' => '7:11'],
            ['song' => 'What\'s Going On', 'artist' => 'Marvin Gaye', 'date' => '25/01/2024', 'Duration' => '3:53'],
            ['song' => 'Hallelujah', 'artist' => 'Jeff Buckley', 'date' => '25/01/2024', 'Duration' => '6:53'],
            ['song' => 'A Day in the Life', 'artist' => 'The Beatles', 'date' => '25/01/2024', 'Duration' => '5:33'],
            ['song' => 'Thriller', 'artist' => 'Michael Jackson', 'date' => '25/01/2024', 'Duration' => '5:57'],
            ['song' => 'Born to Run', 'artist' => 'Bruce Springsteen', 'date' => '25/01/2024', 'Duration' => '4:30'],
            ['song' => 'Dancing Queen', 'artist' => 'ABBA', 'date' => '25/01/2024', 'Duration' => '3:51'],
            ['song' => 'With or Without You', 'artist' => 'U2', 'date' => '25/01/2024', 'Duration' => '4:56'],
            ['song' => 'Superstition', 'artist' => 'Stevie Wonder', 'date' => '25/01/2024', 'Duration' => '4:26'],
        ];

        $totalTracks = count($tracks);



        return $this->render('vinyl/homepage.html.twig', [
            'title' => 'Liste des musiques',
            'tracks' => $tracks,
            'totalTracks' => $totalTracks,

        ]);
    }

    #[Route('/add', name: 'addingpage')]
    public function Addingpage()
    {


        return $this->render('vinyl/addingpage.html.twig', [
            'title' => 'Ajoutez vos musiques',


        ]);
    }

    #[Route('/browse/{slug}', name: 'app_browse')]
    public function browse(string $slug = null): Response
    {
        if ($slug) {
            $title = 'Genre' . u(str_replace('-', ' ', $slug))->title(true);
        } else {
            $title = 'Tous les genres';
        }
        return new Response($title);
    }
}