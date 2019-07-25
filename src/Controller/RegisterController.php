<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RegisterController extends Controller
{
	/**
	* @Route ("/register", name="user_register")
	*/
	public function register(UserPasswordEncoderInterface, $passwordEncoder)
	{
		$user= new User();

		$form = $this->createForm(type:UserType::class, $user);
		$form->handleRequest($form);

		if($form->isSubmitted()&& $form->isValid()){
			$password= $passwordEncoder->encodePassword(
				$user,
				$user->getPlainPassword()
			);
			$user->setPassword($password);

			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($user);
			$entityManager->flush();

			$this->redirect(url:'articles/html.index');
		}

		return $this->render(view:'register/register.html.twig', [
			'form'=> $form ->createView()
		]);

	}
}