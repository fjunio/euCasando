<?php

namespace Dashboard\Service;

use Application\Exception\ApplicationException;
use Application\Exception\ValidationException;
use Dashboard\Entity\ConfigMensagem;
use Dashboard\Entity\Mensagem;
use Dashboard\VO\ConfigMensagemVO;
use Dashboard\VO\MensagemVO;

/**
 * Description of MensagemServiceImpl
 *
 * @author francis.oliveira
 */
class MensagemServiceImpl extends Service implements MensagemService {

    private $mensagemDao = null;

    public function __construct($serviceLocator) {
        $this->setServiceLocator($serviceLocator);
    }
    
    /**
     * Retona o Objeto ConfigMensagem + a lista de Mensagens.
     * @param type $idCasamento
     * @return ConfigMensagemVO
     */
    public function getAllByCasamentoId($idCasamento) {
        
        $configByDao = $this->getMensagemDao()->getOneByCasamentoId($idCasamento);
        
        if ($configByDao <> null) {
            $configMsgVo = new ConfigMensagemVO();
            $configMsgVo->setId($configByDao->getId());
            $configMsgVo->setEnviarEmail($configByDao->getEnviarEmail());
            $configMsgVo->setNecessitaAprovacao($configByDao->getNecessitaAprovacao());
            $configMsgVo->setIdCasamento($configByDao->getCasamento()->getId());
            
            foreach ($configByDao->getMensagens() as $msg) {
                $mensagemVO = new MensagemVO();
                $mensagemVO->setId($msg->getId());
                $mensagemVO->setNome($msg->getNome());
                $mensagemVO->setEmail($msg->getEmail());
                $mensagemVO->setTexto($msg->getTexto());
                $mensagemVO->setAprovada($msg->getAprovada());
                
                $configMsgVo->addMensagem($mensagemVO);
            }
        }        
        return $configMsgVo;
    }
    
    /**
     * Aprova uma mensagem para ser apresentada no mural do site.
     * @param MensagemVO $mensagemVO
     * @throws ValidationException
     * @throws ApplicationException
     */
    public function aproveMessage(MensagemVO $mensagemVO) {
        
        if ($mensagemVO->getIdConfigMensagem() === null){
            throw new ValidationException('ID da configuração está nulo.');
        }
        $configMensagem = $this->getConfigById($mensagemVO->getIdConfigMensagem());
        
        if ($configMensagem === null) {
            throw new ValidationException('Objeto ConfigMensagem não foi encontrado na base de dados');
        }
        
        $mensagem = new Mensagem();
        $mensagem->setId($mensagemVO->getId());
        $mensagem->setNome($mensagemVO->getNome());
        $mensagem->setEmail($mensagemVO->getEmail());
        $mensagem->setTexto($mensagemVO->getTexto());
        $mensagem->setAprovada((bool)true);
        $mensagem->setConfigMensagem($configMensagem);
        
        try {
            $this->getMensagemDao()->update($mensagem);
        } catch (Exception $exc) {
            throw new ApplicationException($exc->getTraceAsString());
        }      
    }

    /**
     * Deleta uma mensagem
     * @param MensagemVO $mensagemVO
     * @throws ValidationException
     * @throws ApplicationException
     */
    public function delete(MensagemVO $mensagemVO) {
        if ($mensagemVO->getIdConfigMensagem() === null){
            throw new ValidationException('ID da configuração está nulo.');
        }
        $configMensagem = $this->getConfigById($mensagemVO->getIdConfigMensagem());
        
        if ($configMensagem === null) {
            throw new ValidationException('Objeto ConfigMensagem não foi encontrado na base de dados');
        }
        
        $mensagem = new Mensagem();
        $mensagem->setId($mensagemVO->getId());
        $mensagem->setNome($mensagemVO->getNome());
        $mensagem->setEmail($mensagemVO->getEmail());
        $mensagem->setTexto($mensagemVO->getTexto());
        $mensagem->setAprovada($mensagemVO->getAprovada());
        $mensagem->setConfigMensagem($configMensagem);
        
        try {
            $this->getMensagemDao()->delete($mensagem);
        } catch (Exception $exc) {
            throw new ApplicationException($exc->getTraceAsString());
        }        
    }
    
    /**
     * Atualiza as configurações de mensagem feitas pelo usuário em tela
     * 
     * @param ConfigMensagemVO $configMensagemVO
     * @throws ValidationException
     * @throws ApplicationException
     */
    public function updateConfig(ConfigMensagemVO $configMensagemVO){
         if ($configMensagemVO->getId() === null){
            throw new ValidationException('ID da configuração está nulo.');
        }
        $configMensagem = $this->getConfigById($configMensagemVO->getId());
        
        if ($configMensagem === null) {
            throw new ValidationException('Objeto ConfigMensagem não foi encontrado na base de dados');
        }
        
        $configMensagem->setEnviarEmail($configMensagemVO->getEnviarEmail());
        $configMensagem->setNecessitaAprovacao($configMensagemVO->getNecessitaAprovacao());
        
        try {
            $this->getMensagemDao()->update($configMensagem);
        } catch (Exception $exc) {
            throw new ApplicationException($exc->getTraceAsString());
        }           
    }

    /**
     * Retorna o objeto ConfigMensagem do banco de dados
     * @param type $idConfig
     * @return type ConfigMensagem
     */
    public function getConfigById($idConfig) {
        return $this->getMensagemDao()->getConfigById($idConfig);
    }

    private function getMensagemDao() {
        if ($this->mensagemDao === null) {
            $this->mensagemDao = $this->getServiceLocator()
                    ->get('MensagemDAOFactory');
        }
        return $this->mensagemDao;
    }
}
