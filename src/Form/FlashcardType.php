<?php

namespace App\Form;

use App\Entity\Flashcard;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FlashcardType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('question', TextType::class, [
                'label' => 'Question',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Enter the question'
                ]
            ])
            ->add('answer', TextType::class, [
                'label' => 'Answer',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Enter the answer'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Flashcard::class,
        ]);
    }
}
