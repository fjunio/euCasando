<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FormAddConvidado
 *
 * @author Israel Vinivius
 */

namespace Dashboard\Forms;

//use Zend\Captcha\AdapterInterface as CaptchaAdapter;

use Dashboard\VO\ConvidadoVO;
use Zend\Form\Element;
use Zend\Form\Form;
use Zend\Stdlib\Hydrator\ClassMethods;

class FormAddConvidado extends Form {
    
   // protected $captcha;
    
    //public function __construct(CaptchaAdapter $captcha) {
    public function __construct() {
         parent::__construct();
        //$this->captcha = $captcha;
        
        parent::setAttribute("method", "post");
        //parent::setAttribute("action", "add");
        
        $this->setHydrator(new ClassMethods())
//             ->setObject(new ListaDeConvidadosFil());
                ->setObject(new ConvidadoVO());
        
        //Criando campos
        $this->add(array(
            'type' => 'Zend\Form\Element\Hidden',
            'name' => 'id',
        ));
        
        $this->add(array(
            'type' => 'Zend\Form\Element\Text',
            'name' => 'nome',
            'attributes' => array(
                'required' => 'required',
                'placeholder' => 'Nome',
                'class' => 'form-control'
            )
        ));
        
        $this->add(array(
            'type' => 'email',
            'name' => 'email',
            'attributes' => array(
                'required' => 'required',
                'placeholder' => 'Email',
                'class' => 'form-control'
            )
        ));
        
        $this->add(array(
             'type' => 'select',
             'name' => 'qtdeAdultos',
             'options' => array(
                 'empty_option' => 'Escolha a quantidade de adultos',
                     'value_options' => array(
                        '1' => '1',
                        '2' => '2',
                        '3' => '3',
                        '4' => '4',
                        '5' => '5',
                        '6' => '6',
                        '7' => '7',
                        '8' => '8',
                        '9' => '9',
                        '10' => '10'
                     ),
             ),
            'attributes' => array(
                'required' => 'required',
                'class'  => 'form-control',
            ),
        ));
        
        $this->add(array(
             'type' => 'select',
             'name' => 'qtdeCriancas',
             'options' => array(
                 'empty_option' => 'Escolha a quantidade de criaças',
                     'value_options' => array(
                        '1' => '1',
                        '2' => '2',
                        '3' => '3',
                        '4' => '4',
                        '5' => '5',
                        '6' => '6',
                        '7' => '7',
                        '8' => '8',
                        '9' => '9',
                        '10' => '10'
                     ),
             ),
            'attributes' => array(
                'required' => 'required',
                'class'  => 'form-control',
            ),
        ));
        
         /*$this->add(array(
            'type' => 'Zend\Form\Element\Captcha',
            'name' => 'captcha',
            'options' => array(
                'label' => 'Please verify you are human.',
                'captcha' => $this->captcha,
            ),
        ));*/
        
        
         
        $this->add(new Element\Csrf('security'));
        
        $this->add(array(
            'name' => 'send',
            'type'  => 'Submit',
            'attributes' => array(
                'value' => 'Cadastrar',
                'class' => 'btn btn-primary btnDireita'
            ),
        ));
        
    }
    
}

?>
