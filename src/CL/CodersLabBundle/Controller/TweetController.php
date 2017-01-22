<?php

namespace CL\CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use CL\CodersLabBundle\Entity\tweet;
use CL\CodersLabBundle\Repository\tweetRepository;

class TweetController extends Controller {

    /**
     * @Route("/create",name="CLCodersLabBundle_tweet_create")
     */
    public function createAction() {


        return $this->render('CLCodersLabBundle:Tweet:create.html.twig', array(
                        // ...
        ));
    }

    /*
     * Form builder for new and create actions
     */

    private function createForm(tweet $tweetObj) {
        
        $url=$this->generateUrl('CLCodersLabBundle_tweet_create');
        
        $form = $this->createFormBuilder($tweetObj)
                ->setAction($url)
                ->setMethod('POST')
                ->add('name', 'text')
                ->add('text', 'text')
                ->add('save', 'submit', array('label' => 'Dodaj'))
                ->getForm();
        
        return $form;
    }

    /**
     * @Route("/new")
     */
    public function newAction() {




        return $this->render('CLCodersLabBundle:Tweet:new.html.twig', array(
                        // ...
        ));
    }

    /**
     * @Route("/showAll")
     */
    public function showAllAction() {
        $tweets = $this->getDoctrine()->getRepository('CLCodersLabBundle:tweet')->findAll();

        return $this->render('CLCodersLabBundle:Tweet:show_all.html.twig', array(
                    'tweets' => $tweets
        ));
    }

}
