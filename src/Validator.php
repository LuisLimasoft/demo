<?php
namespace LuisLimasoft\DemoComposer;

use LuisLimasoft\DemoComposer\Exceptions\DigitosInvalidosException;
use LuisLimasoft\DemoComposer\Exceptions\CantidadDigitosInvalidosException;

class Validator
{
    public function validate($documento)
    {
        if(!in_array(strlen($documento), [8, 11]))
        {
            throw new CantidadDigitosInvalidosException;
        }

        if(!is_numeric($documento))
        {
            throw new DigitosInvalidosException;
        }

        return $documento;
    }
}