<?php


namespace App\Controller;


class ClanController extends AbstractController
{
    public function clan()
    {

        return $this->twig->render('Clan/clan.html.twig');
    }
}