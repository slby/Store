<?php
namespace Store\Form;

use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;

class RegistrationFilter extends InputFilter
{
        public function __construct($sm)
        {
                // self::__construct(); // parnt::__construct(); - trows and error
                $this->add(array(
                        'name'     => 'firstname',
                        'required' => true,
                        'filters'  => array(
                                array('name' => 'StripTags'),
                                array('name' => 'StringTrim'),
                        ),
                        'validators' => array(
                                array(
                                        'name'    => 'StringLength',
                                        'options' => array(
                                                'encoding' => 'UTF-8',
                                                'min'      => 1,
                                                'max'      => 100,
                                        ),
                                ),
//                                array(
//                                        'name'                => 'DoctrineModule\Validator\NoObjectExists',
//                                        'options' => array(
//                                                'object_repository' => $sm->get('doctrine.entitymanager.orm_default')->getRepository('Store\Entity\User'),
//                                                'fields'            => 'lasname'
//                                        ),
//                                ),
                        ),
                ));
                
                
                $this->add(array(
                        'name'     => 'lastname',
                        'required' => true,
                        'filters'  => array(
                                array('name' => 'StripTags'),
                                array('name' => 'StringTrim'),
                        ),
                        'validators' => array(
                                array(
                                        'name'    => 'StringLength',
                                        'options' => array(
                                                'encoding' => 'UTF-8',
                                                'min'      => 1,
                                                'max'      => 100,
                                        ),
                                ),
//                                array(
//                                        'name'                => 'DoctrineModule\Validator\NoObjectExists',
//                                        'options' => array(
//                                                'object_repository' => $sm->get('doctrine.entitymanager.orm_default')->getRepository('Store\Entity\User'),
//                                                'fields'            => 'lasname'
//                                        ),
//                                ),
                        ),
                ));
                

        $this->add(array(
            'name'       => 'email',
            'required'   => true,
            'validators' => array(
                array(
                    'name' => 'Email Address'
                ),
                                array(
                                        'name'                => 'DoctrineModule\Validator\NoObjectExists',
                                        'options' => array(
                                                'object_repository' => $sm->get('doctrine.entitymanager.orm_default')->getRepository('Store\Entity\User'),
                                                'fields'            => 'email'
                                        ),
                                ),
            ),
        ));
                
                $this->add(array(
                        'name'     => 'password',
                        'required' => true,
                        'filters'  => array(
                                array('name' => 'StripTags'),
                                array('name' => 'StringTrim'),
                        ),
                        'validators' => array(
                                array(
                                        'name'    => 'StringLength',
                                        'options' => array(
                                                'encoding' => 'UTF-8',
                                                'min'      => 6,
                                                'max'      => 12,
                                        ),
                                ),
                        ),
                ));     
                
                
                $this->add(array(
                        'name'     => 'birthdate',
                        'required' => true,
                        'filters'  => array(
                                array('name' => 'StripTags'),
                                array('name' => 'StringTrim'),
                        ),
                        'validators' => array(
                                array(
                                        'name'    => 'StringLength',
                                        'options' => array(
                                                'encoding' => 'UTF-8',
                                                'min'      => 1,
                                                'max'      => 100,
                                        ),
                                ),
//                                array(
//                                        'name'                => 'DoctrineModule\Validator\NoObjectExists',
//                                        'options' => array(
//                                                'object_repository' => $sm->get('doctrine.entitymanager.orm_default')->getRepository('Store\Entity\User'),
//                                                'fields'            => 'lasname'
//                                        ),
//                                ),
                        ),
                ));
            
        }
}