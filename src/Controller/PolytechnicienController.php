<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Polytechnicien;
class PolytechnicienController extends AbstractController
{
    /**
     * @Route("/poly", name="app_poly")
     */
    public function index(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $poly = new Polytechnicien();
        $poly -> setUsername('mariemSaffar');
        $poly -> setPassword('poly2023');
        $entityManager->persist($poly);
        $entityManager->flush();
        return $this->render('poly/index.html.twig', [
            'id' => $poly->getId(),
        ]);
    }
     /**
     * @Route("/poly", name="poly")
      */
      public function poly($id)
      {
         $poly = $this->getDoctrine()
          ->getRepository(Polytechnicien::class)
           ->find($id);
        if (!$poly)
        {
            throw $this->createNotFoundException( 'No poly found for id '.$id ); 
        } 
        return $this->render('poly/index.html.twig', ['poly' =>$poly ]); 
    }
}
