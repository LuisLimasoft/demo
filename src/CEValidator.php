<?php
namespace App;

use LuisLimasoft\DemoComposer\Exceptions\CEInvalidoException;
use LuisLimasoft\DemoComposer\Exceptions\CantidadDigitosInvalidosCEException;

class CEValidator
{
    public function validate($documento)
    {
        if(strlen($documento) > 12)
        {
            throw new CantidadDigitosInvalidosCEException;
        }

        if(!(substr( $documento, 0, 2) == 'CE'))
        {
            throw new CEInvalidoException;
        }

        return $documento;
    }
}