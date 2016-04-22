<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TuneController extends Controller
{
    /**
     * @Route("/tunes", name="tunes")
     */
    public function indexAction(Request $request)
    {
        $tunes = $this->container->get('doctrine.orm.entity_manager')->getRepository('AppBundle:Tune')->findAll();
        
        // replace this example code with whatever you need
        return $this->render('Tune/index.html.twig', array('tunes'=>$tunes));
    }
    
    /**
     * @Route("/tune/{pk}", name="tune")
     */
    public function showAction(Request $request,$pk)
    {
        $tune = $this->container->get('doctrine.orm.entity_manager')->getRepository('AppBundle:Tune')->find($pk);
        
        // replace this example code with whatever you need
        return $this->render('Tune/show.html.twig', array('tune'=>$tune));
    }
}
