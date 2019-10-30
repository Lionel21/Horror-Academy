<?php


namespace App\Controller;


class TrackController extends AbstractController
{
    public function track()
    {

        return $this->twig->render('Track/track.html.twig');
    }
}