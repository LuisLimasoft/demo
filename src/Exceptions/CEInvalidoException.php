<?php
namespace App\Exceptions;

class CEInvalidoException extends \Exception
{
    public function getMensaje()
    {
        return 'Documento ingresado contiene no inicia con caracteres CE';
    }
}