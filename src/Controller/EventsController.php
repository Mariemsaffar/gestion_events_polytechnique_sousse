<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Events;
use App\Form\EventsType;
use App\Repository\EventsRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\Extension\Core\Type\FormType;

class EventsController extends AbstractController
{
    /**
     * @Route("/ajout", name="ajout")
     */
    public function ajout(Request $request)
    {
        
        $events= new Events();
        $form=$this->createForm("App\Form\EventsType",$events);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            
            
          
            $data = $form->getData();
            
            $em->persist($events);
            $em->flush();
           

           $this->addFlash(
               'success',
               'Votre evenement a été crée avec succès !'
           );
           return $this->render('events/consult.html.twig');
           

        }
        return $this->render('events/ajout.html.twig',['form' => $form->createView() ]);

    }
   

    
    
    
        /** 
        *@Route("/consult",name="consult")
        *@param events $Events
        *@param lesevents $lesevents
        */
        public function affiche(EventsRepository $repository):Response
        {
        $em =$this->getDoctrine()->getManager();
        $repository=$em->getRepository(Events::class);
        $lesevents = $repository ->findAll();
        return $this->render('events\consult.html.twig',['lesevents' => $lesevents]);}
        

}