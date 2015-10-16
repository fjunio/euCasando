<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Forms\FormAddConvidado;
use Application\Filter\ListaDeConvidadosFiltros;
use Application\Entity\ListaDeConvidadosFil;
use Zend\Debug\Debug;


class ListaDeConvidadosController extends AbstractActionController
{
    public function indexAction()
    {
        
    }
    
    public function adicionarConvidadoAction()
    {
        //INSTANCIA FORMULÁRIO
        $formAddCon = new FormAddConvidado();
        $listing = new ListaDeConvidadosFil();
        $formAddCon->bind($listing);
        $formAddCon->setInputFilter(new ListaDeConvidadosFiltros());
        
        //VERIFICA SE EXISTE POST
        if( $this->getRequest()->isPost() )
        {
            $email = $this->getRequest()->getPost('email');
            
            //COLOCA VALORES DIGITADOS NOS CAMPOS
            $formAddCon->setData($this->getRequest()->getPost());
            
            
            if($formAddCon->isValid() )
            {
                $validatedFormData = $formAddCon->getData();
                Debug::dump($validatedFormData);

                // update entity in db or whatever
                // $db->update($validatedFormData);
                // success messages, redirect...

            } else {
                // uuppps some fields contain errors
                $formAddCon->populateValues($this->getRequest()->getPost());
                // get all form errors
                $errorMessages = $formAddCon->getMessages();
            }
            
            
            
            
            
            
            //INSTANCIA CLASSE VALIDADORA DE EMAILS
//            $validator = new EmailAddress();
//            if ($validator->isValid($email)) {
//                // email appears to be valid
//            }else{
//                // email is invalid; print the reasons
//                foreach ($validator->getMessages() as $message) {
//                    echo "$message\n";
//                }
//            }
        }
        
        $view = new ViewModel(array('form' => $formAddCon));
        
        return $view;
    }
    
}
