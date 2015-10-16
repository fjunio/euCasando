<?php
namespace Application\Filter;

use Zend\InputFilter\InputFilter;

class ListaDeConvidadosFiltros extends InputFilter 
{
    public function __construct() {
    /*
        $this->add(array(
            'name' => 'item_name',
            'required' => true,
            'filters' => array(
                array('name' => 'StripTags'),
                array('name' => 'StringTrim'),
            ),
            'validators' => array(
                array(
                    'name' => 'StringLength',
                    'options' => array(
                        'encoding' => 'UTF-8',
                        'min' => 1,
                        'max' => 100,
                    ),
                ),
            ),            
        ));

        $this->add(array(
            'name' => 'item_min_price',
            'required' => true,
            'filters' => array(
                array('name' => 'StripTags'),
                array('name' => 'StringTrim'),
            ),
            'validators' => array(
                array(
                    'name' => 'Zend\I18n\Validator\IsFloat',
                ),
                array(
                    'name' => 'GreaterThan',
                    'options' => array(
                      'min' => 0
                    )                    
                ),
            ),            
        ));

        $this->add(array(
            'name' => 'item_max_price',
            'required' => true,
            'filters' => array(
                array('name' => 'StripTags'),
                array('name' => 'StringTrim'),
            ),
            'validators' => array(
                array(
                    'name' => 'Zend\I18n\Validator\IsFloat',
                ),
                array(
                    'name' => 'GreaterThan',
                    'options' => array(
                      'min' => 0
                    )                    
                ),
                array(
                    'name' => 'Callback',
                    'options' => array(
                        'messages' => array(
                            \Zend\Validator\Callback::INVALID_VALUE => 'The maximum price is less than the minimum price',
                        ),
                        'callback' => function($value, $context=array()) {
                            $maxPrice = $value;
                            $minPrice = $context['item_min_price'];
                            $isValid = $maxPrice >= $minPrice;
                            return $isValid;
                        },
                    ),
                ),
            ),            
        ));*/
        
        $this->add(array(
            'name' => 'email',
            'required' => true,
            'filters' => array(
                array('name' => 'StripTags'),
                array('name' => 'StringTrim'),
            ),
            'validators' => array(
                array(
                    'name' => 'EmailAddress',
                ),
            ),            
        ));

        $this->add(array(
            'name' => 'nome',
            'required' => true,
            'filters' => array(
                array('name' => 'StripTags'),
                array('name' => 'StringTrim'),
            ),
           
        ));        
    }
}