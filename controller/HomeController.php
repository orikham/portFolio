<?php
class HomeController extends Controller
{

    public function home()
    {
        echo self::getRender('homepage.html.twig', []);
    }

    public function formation()
    {
        echo self::getRender('formation.html.twig', []);
    }

    public function projet()
    {
        echo self::getRender('projets.html.twig', []);
    }

    public function contact()
    {
        echo self::getRender('contact.html.twig', []);
    }

}