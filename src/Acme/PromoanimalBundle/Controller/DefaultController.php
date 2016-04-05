<?php

namespace Acme\PromoanimalBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmePromoanimalBundle:Default:index.html.twig');
    }
    
    /**
     * @Route("/admin")
     */
    public function adminAction()
    {
       return $this->render('AcmePromoanimalBundle:Default:index.html.twig');
    }
}
