<?php
namespace LuisLimasoft\DemoComposer\Exceptions;

class DigitosInvalidosException extends \Exception
{
    public function getMensaje()
    {
        return 'Documento ingresado contiene caracteres invalidos';
    }
}