<?php

namespace App\Controller;


use Symfony\Component\HttpClient\HttpClient;
use App\Model\FilmManager;


class FilmController extends AbstractController
{
    public function index()
    {
        return $this->twig->render('Film/show.html.twig');

        $client = HttpClient::create();
        $response = $client->request('GET', 'https://hackathon-wild-hackoween.herokuapp.com/movies');

        $statusCode = $response->getStatusCode(); // get Response status code 200
        $content = [];
        if ($statusCode === 200) {
            $content = $response->toArray();
            // convert the response (here in JSON) to an PHP array
            $monfilm = $content['movies'];

            return $this->twig->render('Film/show.html.twig', ['monfilm' => $monfilm]);

        }
    }


    public function show(int $id)
    {
        $filmManager = new FilmManager();
        $monfilm = $filmManager->selectOneById($id);
        return $this->twig->render('Film/show.html.twig', ['monfilm' => $monfilm]);
    }
}
