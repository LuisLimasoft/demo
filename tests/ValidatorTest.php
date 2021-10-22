<?php

use LuisLimasoft\DemoComposer\Validator;
use PHPUnit\Framework\TestCase;
use LuisLimasoft\DemoComposer\Exceptions\DigitosInvalidosException;
use LuisLimasoft\DemoComposer\Exceptions\CantidadDigitosInvalidosException;

class ValidatorTest extends TestCase
{
    public function test_debe_retornar_exception_cantidad_caracteres_invalida()
    {
        $this->expectException(CantidadDigitosInvalidosException::class);

        $validator = new Validator;
        $validator->validate('123456789');
    }

    public function test_debe_retornar_exception_digitos_invalidos()
    {
        $this->expectException(DigitosInvalidosException::class);

        $validator = new Validator;
        $validator->validate('123456C8');
    }

    public function test_debe_retornar_mismo_numero()
    {
        $documento = '12345678';

        $validator = new Validator;

        $this->assertEquals($documento, $validator->validate($documento));
    }
}