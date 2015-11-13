<?php

namespace Application\Exception;

/**
 * Description of ApplicationException
 *
 * @author francis.oliveira
 */
class ApplicationException extends \Exception{
    public function __construct($message, $code, $previous) {
        parent::__construct($message, $code, $previous);
    }
}
