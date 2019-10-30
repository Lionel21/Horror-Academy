<?php


namespace App\Controller;


class FilmController extends AbstractController
{
    public function film()
    {

        return $this->twig->render('Film/film.html.twig');
    }
}