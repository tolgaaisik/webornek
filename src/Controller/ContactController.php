<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
      $form = $this->createForm(ContactType::class);
        return $this->render('contact/index.html.twig', [
            'our_form' => $form->createView(),

        ]);
      $form =$this->addFlash('success', 'Mesajınız gönderildi');
        return $this->redirectToRoute('contact');

    }
}