<?php

namespace App\Controller;

use App\Form\KayitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class KayitController extends AbstractController
{
    /**
     * @Route("/kayit", name="kayit")
     */
    public function index()
    {
    	$form = $this->createForm(KayitType::class);
        return $this->render('kayit/index.html.twig', [
            'our_form' => $form->createView(),
        ]);
    }
}
