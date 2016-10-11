<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Form;

use AppBundle\Entity\Booking;
use AppBundle\Entity\Room;
use AppBundle\Form\Type\CustomerType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;   
use AppBundle\Form\Type\DateTimePickerType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Defines the form used to create and manipulate blog posts.
 *
 * @author Ryan Weaver <weaverryan@gmail.com>
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
class BookingType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        // For the full reference of options defined by each form field type
        // see http://symfony.com/doc/current/reference/forms/types.html
        // By default, form fields include the 'required' attribute, which enables
        // the client-side form validation. This means that you can't test the
        // server-side validation errors from the browser. To temporarily disable
        // this validation, set the 'required' attribute to 'false':
        //
        //     $builder->add('title', null, ['required' => false, ...]);

        $builder
//                ->add('title', null, [
//                    'attr' => ['autofocus' => true],
//                    'label' => 'label.title',
//                ])
                ->add('room', EntityType::class, array(
                    'class' => 'AppBundle:Room',
                    'choice_label' => 'name',
                ))
                ->add('checkinDate', DateTimePickerType::class, [
                    'label' => 'label.published_at',
                ])
                ->add('adults', null, [
                    'label' => 'label.published_at',
                ])
                ->add('checkoutDate', DateTimePickerType::class, [
                    'label' => 'label.published_at',
                ])
                ->add('customer', CustomerType::class, [
                    'label' => 'label.published_at',
                ])
//                ->add('images', FileType::class, array(
//                    'attr' => array(
//                        'accept' => 'image/*',
//                        'multiple' => 'multiple'
//                    )
//                ))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults([
            'data_class' => Booking::class,
        ]);
    }

}
