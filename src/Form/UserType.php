<?php

namespace App\Form;

/**
 * 
 */
class UserType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder-> add(child 'username', type: TextType::class)
		-> add(child 'email', type: EmailType::class)
		-> add(child 'plainPassword', type: RepeatedType::class,
		 ['type' => PasswordType::class, 
		 'first_options'=>['label' => 'Password'], 
		 'second_options' => ['label' => 'Repated password'] 
		]);
		-> add (child: 'fullName', type: TextType::class);
		->add(child:'termsAgreed', type:CheckboxType::class,  [
			'mapped' =>false,
			'constraints' => new IsTrue(),
			'label' => 'I agree to the terms of service']);
		-> add(child:'Register', type:SubmidType::class);
	}
	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults([
			'data_class' => User::class
		]);
	}

}


