<?php

namespace AppBundle\Form;

use AppBundle\Entity\Category;
use AppBundle\Entity\Job;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;




class JobType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('category',EntityType::class, [ 'class' => Category::class, 'choice_label' => 'name'])
                ->add('type',ChoiceType::class,['choices'=>array_combine(Job::getTypes(), Job::getTypeValues()),'expanded'=>true])
                ->add('company',TextType::class)
                ->add('logo',FileType::class, array('required' => false, 'label' => 'Company logo'))
                ->add('url',UrlType::class, array('required' => false))
                ->add('position',TextType::class)
                ->add('location',TextType::class)
                ->add('description',TextareaType::class)
                ->add('howToApply', null, array('label' => 'How to apply?'))
                ->add('token')
                ->add('isPublic', ChoiceType::class, ['choices'=>[
                    'Yes' => true,
                    'No' => false,
                ],
                'label' => 'Public?'])
                ->add('email',EmailType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Job'
        ));
    }

    /**
     * {@inheritdoc}
     */
//    public function getBlockPrefix()
//    {
//        return 'appbundle_job';
//    }

    public function getBlockPrefix()
    {
        return 'job';
    }

}
