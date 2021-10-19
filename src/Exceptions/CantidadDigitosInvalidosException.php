<?php
namespace App\Exceptions;

class CantidadDigitosInvalidosException extends \Exception
{
    public function getMensaje()
    {
        return 'Documento ingresado no contiene 8 o 11 digitos';
    }
}