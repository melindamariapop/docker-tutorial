<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function index()
    {
        $number = mt_rand(0, 100);

        return new Response(
            '<html><body><h1>My new content!!!!!</h1><h2>Refresh to get your lucky number</h2><h1>Lucky number: '.$number.'</h1></body></html>'
        );
    }
}