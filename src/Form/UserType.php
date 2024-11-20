<?php
// src/Form/UserType.php
namespace App\Form;

use App\Entity\User;
use App\Enum\UserRole;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('email', TextType::class)
            ->add('password', PasswordType::class)
            ->add('profilePicture', FileType::class, [
                'required' => false,
                'mapped' => false,
            ])
            ->add('role', ChoiceType::class, [
                'choices' => [
                    'Admin' => UserRole::ADMIN,
                    'User' => UserRole::USER,
                ],
                'expanded' => false, // Change to true if you want radio buttons
                'multiple' => false,
                'choice_value' => function (?UserRole $role) {
                    return $role?->value; // Use the backing value of the enum
                },
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
