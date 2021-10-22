<?php
namespace LuisLimasoft\DemoComposer\Exceptions;

class CantidadDigitosInvalidosCEException extends \Exception
{
    public function getMensaje()
    {
        return 'Documento ingresado supera limite de 12 digitos';
    }
}