<?php

namespace Romain\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AnnonceController extends Controller
{
    public function indexAction()
    {
            $em = $this->getDoctrine()->getManager();

        $cruds = $em->getRepository('RomainBlogBundle:Crud')->findAll();

        return $this->render('RomainBlogBundle:Blog:index.html.twig', array(
            'cruds' => $cruds,
        ));
       
    }
    
    public function menuAction()
    {
        
    }
    
}