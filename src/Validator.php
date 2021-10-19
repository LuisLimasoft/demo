<?php
namespace App;

use App\Exceptions\DigitosInvalidosException;
use App\Exceptions\CantidadDigitosInvalidosException;

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