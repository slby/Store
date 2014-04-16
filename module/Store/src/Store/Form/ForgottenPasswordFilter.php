<?php

namespace Store\Form;

use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;

class ForgottenPasswordFilter extends InputFilter {

    public function __construct($sm) {
        $this->add(array(
            'name' => 'email',
            'required' => true,
            'validators' => array(
                array(
                    'name' => 'Email Address'
                ),
                array(
                    'name' => 'DoctrineModule\Validator\ObjectExists',
                    'options' => array(
                        'object_repository' => $sm->get('doctrine.entitymanager.orm_default')->getRepository('Store\Entity\User'),
                        'fields' => 'email'
                    ),
                ),
            ),
        ));
    }

}