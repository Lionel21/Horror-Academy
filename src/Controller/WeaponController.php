<?php


namespace App\Controller;

class WeaponController extends AbstractController
{
    public function weapon()
    {

        return $this->twig->render('Weapon/weapon.html.twig');
    }
}