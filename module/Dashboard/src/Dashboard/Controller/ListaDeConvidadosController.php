<?php

namespace Dashboard\Controller;

use Dashboard\Filter\ListaDeConvidadosFiltros;
use Dashboard\Forms\FormAddConvidado;
use Dashboard\VO\ConvidadoVO;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;


class ListaDeConvidadosController extends AbstractActionController
{
    private $convidadoService = null;
    
    public function indexAction()
    {
        $listaConvidadoVo = $this->getConvidadoService()->getAllByCasamentoId((int)1);
        
        $resumoConvidados = $this->getConvidadoService()->getResumoConvidados($listaConvidadoVo);
        
        $view = new ViewModel(array('lista' => $listaConvidadoVo,
                                    'qtde_adultos' => $resumoConvidados['qtde_adultos'],
                                    'qtde_criancas'  => $resumoConvidados['qtde_criancas'],
                                    'qtde_total'    => $resumoConvidados['qtde_total']));
        
        return $view;
        
    }
    
    public function adicionarConvidadoAction()
    {
        //INSTANCIA FORMULÁRIO
        $formAddCon = new FormAddConvidado();
//        $listing = new ListaDeConvidadosFil();
        $listing = new ConvidadoVO();
        $formAddCon->bind($listing);
        $formAddCon->setInputFilter(new ListaDeConvidadosFiltros());
        
        //VERIFICA SE EXISTE POST
        if( $this->getRequest()->isPost() )
        {
//            $email = $this->getRequest()->getPost('email');
//            $nome = $this->getRequest()->getPost('nome');
            
            //COLOCA VALORES DIGITADOS NOS CAMPOS
            $formAddCon->setData($this->getRequest()->getPost());            
            
            if($formAddCon->isValid() )
            {
                $validatedFormData = $formAddCon->getData();
                //Debug::dump($validatedFormData);
                
                $convidadoVo = new ConvidadoVO();
                $convidadoVo->setId($validatedFormData->getId());
                $convidadoVo->setNome($validatedFormData->getNome());
                $convidadoVo->setEmail($validatedFormData->getEmail());
                $convidadoVo->setQtdeAdultos($validatedFormData->getQtdeAdultos());
                $convidadoVo->setQtdeCriancas($validatedFormData->getQtdeCriancas());
                $convidadoVo->setIdCasamento((int)1);
                                
                $this->getConvidadoService()->save($convidadoVo);
                
                $formAddCon = new FormAddConvidado();
                $listing = new ConvidadoVO();
                $formAddCon->bind($listing);

            } else {
                // uuppps some fields contain errors
                $formAddCon->populateValues($this->getRequest()->getPost());
                // get all form errors
                $errorMessages = $formAddCon->getMessages();
            }
        }
        $view = new ViewModel(array('form' => $formAddCon));        
        return $view;
    }
    public function deletarConvidadoAction(){
        $idConvidado = $this->params()->fromRoute('id', 0);
        $convidadoVo = new ConvidadoVO();
        $convidadoVo->setId((int)$idConvidado);
        $convidadoVo->setIdCasamento((int)1);
        $this->getConvidadoService()->delete($convidadoVo);
        return $this->redirect()
                    ->toRoute('dashboard/default', array('controller' => 'lista-de-convidados'));
        
    }
    
    public function editarConvidadoAction(){
        
    }
    
    private function getConvidadoService(){
        if($this->convidadoService === null){
            $this->convidadoService = $this->getServiceLocator()->get("ConvidadoServiceFactory");
        }
        return $this->convidadoService;
    }
    
}
