<?php

namespace App\Controller;
use Symfony\Component\HttpClient\HttpClient;

class ClanController extends AbstractController
{
    public function clan()
    {

        $client = HttpClient::create();
        $response = $client->request('GET', 'https://hackathon-wild-hackoween.herokuapp.com/monsters');

        $statusCode = $response->getStatusCode(); // get Response status code 200
        $content = [];
        if ($statusCode === 200) {
            $content = $response->getContent();
            // get the response in JSON format

            $content = json_decode($content);
            // convert the response (here in JSON) to an PHP array
            $monclan = $content->monsters[1];
            $monclanDeux = $content->monsters[2];
            $monclanTrois = $content->monsters[3];
            $monclanQuatre = $content->monsters[4];
            $monclanCinq = $content->monsters[5];
            $monclanSix = $content->monsters[6];
            $monclanSept = $content->monsters[7];
            $monclanHuit = $content->monsters[8];
        }

        return $this->twig->render('Clan/clan.html.twig', [
            'monclan' =>$monclan,
            'monclanDeux'=> $monclanDeux,
            'monclanTrois'=> $monclanTrois,
            'monclanQuatre'=> $monclanQuatre,
            'monclanCinq'=> $monclanCinq,
            'monclanSix'=> $monclanSix,
            'monclanSept'=> $monclanSept,
            'monclanHuit'=> $monclanHuit,

            ]);
    }
}
