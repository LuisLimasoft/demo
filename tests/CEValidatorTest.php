<?php

use App\CEValidator;
use PHPUnit\Framework\TestCase;
use App\Exceptions\CEInvalidoException;
use App\Exceptions\CantidadDigitosInvalidosException;
use App\Exceptions\CantidadDigitosInvalidosCEException;

class CEValidatorTest extends TestCase
{
    public function test_debe_retornar_exception_cantidad_caracteres_invalida()
    {
        $this->expectException(CantidadDigitosInvalidosCEException::class);

        $validator = new CEValidator;
        $validator->validate('CE1234567891011');
    }

    public function test_debe_retornar_exception_digitos_invalidos()
    {
        $this->expectException(CEInvalidoException::class);

        $validator = new CEValidator;
        $validator->validate('123456C8');
    }

    public function test_debe_retornar_mismo_numero()
    {
        $documento = 'CE12345678';

        $validator = new CEValidator;

        $this->assertEquals($documento, $validator->validate($documento));
    }
}