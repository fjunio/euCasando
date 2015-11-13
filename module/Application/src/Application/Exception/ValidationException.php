<?php

namespace Application\Exception;

/**
 * Description of ValidationException
 *
 * @author francis.oliveira
 */
class ValidationException extends \Exception {
    
    public function __construct($message, $code, $previous) {
        parent::__construct($message, $code, $previous);
    }
}
