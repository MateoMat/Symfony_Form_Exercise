<?php

namespace CL\CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class TweetController extends Controller
{
    /**
     * @Route("/create")
     */
    public function createAction()
    {
        return $this->render('CLCodersLabBundle:Tweet:create.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/new")
     */
    public function newAction()
    {
        return $this->render('CLCodersLabBundle:Tweet:new.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/showAll")
     */
    public function showAllAction()
    {
        return $this->render('CLCodersLabBundle:Tweet:show_all.html.twig', array(
            // ...
        ));
    }

}
