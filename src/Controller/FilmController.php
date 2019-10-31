<?php


namespace App\Controller;

use Symfony\Component\HttpClient\HttpClient;

class FilmController extends AbstractController
{
    public function film()
    {


        $client = HttpClient::create();
        $response = $client->request('GET', 'https://hackathon-wild-hackoween.herokuapp.com/movies');

        $statusCode = $response->getStatusCode(); // get Response status code 200
        $content=[];
        if ($statusCode === 200) {
            $content = $response->getContent();

            $content = json_decode($content);
            // convert the response (here in JSON) to an PHP array
            $monfilm = $content->movies[1];


}

        return $this->twig->render('Film/film.html.twig', ['monfilm'=>$monfilm]);
    }


}