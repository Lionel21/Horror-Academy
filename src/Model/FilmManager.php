<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 07/03/18
 * Time: 18:20
 * PHP version 7
 */

namespace App\Model;


use Symfony\Component\HttpClient\HttpClient;

class FilmManager
{
    protected $table ='asso';
    protected $content = [];


    public function selectOneById(int $id)
    {
        $client = HttpClient::create();
        $response = $client->request('GET', 'https://hackathon-wild-hackoween.herokuapp.com/movies/' . $id);

        $statusCode = $response->getStatusCode(); // get Response status code 200
        $content = [];
        if ($statusCode === 200) {
            $content = $response->toArray();
            // convert the response (here in JSON) to an PHP array
            $monfilm = $content['movie'];
            return $monfilm;

        }
    }
}