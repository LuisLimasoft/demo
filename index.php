<?php

require 'vendor/autoload.php';

use App\Validator;
use App\CEValidator;
use App\Exceptions\CEInvalidoException;
use App\Exceptions\CantidadDigitosInvalidosException;

$documentos = [
    'CE1234567891011',
    '123456789',
    '12345678',
    '123456C8',
    'CE12345678',
];

$validator = new Validator;
$cevalidator = new CEValidator;

foreach($documentos as $documento)
{
    try {

        $documento = $validator->validate($documento);
        echo $documento . ' -> DOCUMENTO VALIDO ' . "\n";
    }
    catch(\Exception $e)
    {
        echo $documento . ' -> ' . $e->getMensaje() . "\n";

        try {
            $documento = $cevalidator->validate($documento);
            echo $documento . ' -> DOCUMENTO CE VALIDO ' . "\n";

        }     catch(\Exception $e2) {
            echo $documento . ' -> ' . $e2->getMensaje() . "\n";
        }
    }
}
