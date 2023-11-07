<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\Extension\Core\Type\FormType;



class UserController extends AbstractController
{
    /**
     * @Route("/user", name="app_user")
     */
    public function index(): Response
    {
        $form = $this->createForm(UserType::class);

        return $this->render('user\inscri.html.twig', [
            'form' => $form->createView(),
        ]);
        
    }
  

    /**
     * @Route("/liste", name="app_liste")
     */

    public function submitAction(Request $request, EntityManagerInterface $em)
    {
        $form = $this->createForm(UserType::class);
    
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
    
            $submission = new Submission();
            $submission->setName($data->name);
            $submission->setEmail($data->prenom);
            $submission->setMessage($data->email);
            $submission->setEmail($data->telephone);
            $submission->setEmail($data->libelleEvent);
            $submission->setEmail($data->club);
            
    
            $em->persist($submission);
            $em->flush();
            $em =$this->getDoctrine()->getManager();
            $repository=$em->getRepository(Users::class);
            $lesusers = $repository ->findAll();
        }
        return $this->render('user\liste.html.twig', [
            'lesusers' => $lesusers
        ]);
    
        
    }
    

}
