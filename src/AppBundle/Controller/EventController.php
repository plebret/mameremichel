<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EventController extends Controller
{
    /**
     * @Route("/events", name="events")
     */
    public function indexAction(Request $request)
    {
        $events = $this->container->get('doctrine.orm.entity_manager')->getRepository('AppBundle:Event')->findAll();
        
        // replace this example code with whatever you need
        return $this->render('Event/index.html.twig', array('events'=>$events));
    }
    
    /**
     * @Route("/event/{pk}", name="event")
     */
    public function showAction(Request $request,$pk)
    {
        $event = $this->container->get('doctrine.orm.entity_manager')->getRepository('AppBundle:Event')->find($pk);
        
        // replace this example code with whatever you need
        return $this->render('Event/show.html.twig', array('event'=>$event));
    }
}