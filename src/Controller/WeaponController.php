<?php

namespace App\Controller;
use Symfony\Component\HttpClient\HttpClient;

class WeaponController extends AbstractController
{
    public function weapon()
    {
        $client = HttpClient::create();
        $response = $client->request('GET', 'https://hackathon-wild-hackoween.herokuapp.com/movies');

        $statusCode = $response->getStatusCode();
        $content =[];
        if ($statusCode === 200) {
//            $content = $response->getContent();
            // get the response in JSON format

            $content = $response->toArray();
            // convert the response (here in JSON) to an PHP array
//           // $contents = json_decode($content);
            //$myMovie = $contents->movies[5];

               // var_dump($content);exit();


            //var_dump($myMovie, $myMovie->title);


        }

        return $this->twig->render('Weapon/weapon.html.twig', ['content' => $content]);
    }



}

