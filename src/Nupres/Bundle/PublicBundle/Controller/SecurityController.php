<?php

namespace Nupres\Bundle\PublicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SecurityController extends Controller
{
    public function indexAction()
    {
        return $this->render('NupresPublicBundle:Security:login.html.twig');
    }
}
