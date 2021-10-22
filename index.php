<?php

require 'vendor/autoload.php';

use LuisLimasoft\DemoComposer\Validator;
use LuisLimasoft\DemoComposer\CEValidator;
use LuisLimasoft\DemoComposer\Exceptions\CEInvalidoException;
use LuisLimasoft\DemoComposer\Exceptions\CantidadDigitosInvalidosException;

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
