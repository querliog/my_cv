<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Formation;
use App\Entity\Experience;
use App\Entity\Loisir;

class LuckyController extends Controller
    {
        public function number()
        {
            $number = random_int(0, 100);
            $formations = $this->getDoctrine()->getRepository(Formation::class)->findAll();
            $experiences = $this->getDoctrine()->getRepository(Experience::class)->findAll();
            $loisirs = $this->getDoctrine()->getRepository(Loisir::class)->findAll();
            return $this->render('lucky/number.html.twig', array(
                'number' => $number,
                'formations' => $formations,
                'experiences' => $experiences,
                'loisirs' => $loisirs,
            ));
                
        }
        
        public function formation()
        {
            $form = new Formation();
            $form->setName('Ma Formation');
            $eManager = $this->getDoctrine()->getManager();
            $eManager->persist($form);
            $eManager->flush();
            
            return $this->redirectToRoute('app_lucky_number');
        }
        
        public function experience()
        {
            $form = new Experience();
            $form->setName('Mon Experience');
            $eManager = $this->getDoctrine()->getManager();
            $eManager->persist($form);
            $eManager->flush();
            
            return $this->redirectToRoute('app_lucky_number');
        }
        
        public function loisir()
        {
            $form = new Loisir();
            $form->setName('Mes Loisirs');
            $eManager = $this->getDoctrine()->getManager();
            $eManager->persist($form);
            $eManager->flush();
            
            return $this->redirectToRoute('app_lucky_number');
        }
    }