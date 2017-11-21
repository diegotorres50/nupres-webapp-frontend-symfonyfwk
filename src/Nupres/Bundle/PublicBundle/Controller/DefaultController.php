<?php

namespace Nupres\Bundle\PublicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NupresPublicBundle:Default:index.html.twig');
    }
}
