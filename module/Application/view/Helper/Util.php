<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Helper
 *
 * @author Israel Vinicius
 */
namespace Application\View\Helper;

use Zend\View\Helper\AbstractHelper;

class Util extends AbstractHelper
{
    
    public function __construct()
    {
        
    }
    
    /**
     * @description  this is event On Call, whenever helper is used.
     * @attention This is not initialization, dont use it as init function .
     */
     public function __invoke() {
        return $this;
    }
    
    public function teste(){
        echo 'aaaa';
    }
}

?>
