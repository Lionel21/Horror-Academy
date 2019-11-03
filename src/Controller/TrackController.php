<?php

namespace App\Controller;

use Symfony\Component\HttpClient\HttpClient;

class TrackController extends AbstractController
{
    public function track()
    {
        //return $this->twig->render('Track/track.html.twig');

        $client = HttpClient::create();
        $response = $client->request('GET', 'https://hackathon-wild-hackoween.herokuapp.com/movies');

        $statusCode = $response->getStatusCode(); // get Response status code 200
        $content = []; // Instancisation du tableau
if ($statusCode === 200) {
    $content = $response->getContent();
    // get the response in JSON format

    $content = json_decode($content);
    //var_dump($content) => affichage du tableau objet
    $listeFilm1 = $content->movies[2];
    $listeFilm2 = $content->movies[24];
    $listeFilm3 = $content->movies[66];

    $listeFilm4 = $content->movies[16];
    $listeFilm5 = $content->movies[17];
    $listeFilm6 = $content->movies[18];

    $listeFilm7 = $content->movies[38];
    $listeFilm8 = $content->movies[67];
    $listeFilm9 = $content->movies[14];

    $listeFilm10 = $content->movies[74];
    $listeFilm11 = $content->movies[6];
    $listeFilm12 = $content->movies[7];

    $listeFilm13 = $content->movies[33];
    $listeFilm14 = $content->movies[35];
    $listeFilm15 = $content->movies[37];

    $listeFilm16 = $content->movies[5];
    $listeFilm17 = $content->movies[13];
    $listeFilm18 = $content->movies[29];

    $listeFilm19 = $content->movies[73];
    $listeFilm20 = $content->movies[27];
    $listeFilm21 = $content->movies[55];


    /*for($i = 0; $i <= 3; $i++)
    {
        var_dump($content->movies[$i]->title);
    }*/




    // convert the response (here in JSON) to an PHP array
}

        return $this->twig->render('Track/track.html.twig', [
            'listeFilm1'=>$listeFilm1,
            'listeFilm2'=>$listeFilm2,
            'listeFilm3'=>$listeFilm3,

            'listeFilm4'=>$listeFilm4,
            'listeFilm5'=>$listeFilm5,
            'listeFilm6'=>$listeFilm6,

            'listeFilm7'=>$listeFilm7,
            'listeFilm8'=>$listeFilm8,
            'listeFilm9'=>$listeFilm9,

            'listeFilm10'=>$listeFilm10,
            'listeFilm11'=>$listeFilm11,
            'listeFilm12'=>$listeFilm12,

            'listeFilm13'=>$listeFilm13,
            'listeFilm14'=>$listeFilm14,
            'listeFilm15'=>$listeFilm15,

            'listeFilm16'=>$listeFilm16,
            'listeFilm17'=>$listeFilm17,
            'listeFilm18'=>$listeFilm18,

            'listeFilm19'=>$listeFilm19,
            'listeFilm20'=>$listeFilm20,
            'listeFilm21'=>$listeFilm21,

        ]);
    }
}
