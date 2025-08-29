<?php

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase {
    private $calculator;

    protected function setUp(): void {
        $this->calculator = new Calculator();
    }

    //Adição
    public function testSomarPositivos() {
        $a = 5;
        $b = 3;
        $esperado = 8;

        $resultado = $this->calculator->somar($a, $b);
        $this->assertEquals($esperado, $resultado);
    }

    public function testSomarNegativos() {
        $a = -5;
        $b = -3;
        $esperado = -8;

        $resultado = $this->calculator->somar($a, $b);
        $this->assertEquals($esperado, $resultado);
    }

    public function testSomarComZero() {
        $a = 9;
        $b = 0;
        $esperado = 9;

        $resultado = $this->calculator->somar($a, $b);
        $this->assertEquals($esperado, $resultado);
    }


    // Subtração
    public function testSubtraçãoSimples() {
        $a = 5;
        $b = 3;
        $esperado = 2;

        $resultado = $this->calculator->subtrair($a, $b);
        $this->assertEquals($esperado, $resultado);
    }

    public function testSubtraçãoNegativa() {
        $a = 3;
        $b = 5;
        $esperado = -2;

        $resultado = $this->calculator->subtrair($a, $b);
        $this->assertEquals($esperado, $resultado);
    }


    //Multiplicação
    public function testMultiplicacaoPositivos() {
        $a = 5;
        $b = 3;
        $esperado = 15;

        $resultado = $this->calculator->multiplicar($a, $b);
        $this->assertEquals($esperado, $resultado);
    }

    public function testMultiplicacaoNegativo() {
        $a = -5;
        $b = 3;
        $esperado = -15;

        $resultado = $this->calculator->multiplicar($a, $b);
        $this->assertEquals($esperado, $resultado);
    }

    public function testMultiplicarComZero() {
        $a = 5;
        $b = 0;
        $esperado = 0;

        $resultado = $this->calculator->multiplicar($a, $b);
        $this->assertEquals($esperado, $resultado);
    }

    //Divisão
    public function testDivisaoExata() {
        $a = 10;
        $b = 2;
        $esperado = 5;

        $resultado = $this->calculator->dividir($a, $b);
        $this->assertEquals($esperado, $resultado);
    }

    public function testDivisaoDecimal() {
        $a = 10;
        $b = 4;
        $esperado = 2.5;

        $resultado = $this->calculator->dividir($a, $b);
        $this->assertEquals($esperado, $resultado);
    }

    public function testDividirPorZero() {
        $this->expectException(\InvalidArgumentException::class);

        $a = 5;
        $b = 0;
        $this->calculator->dividir($a, $b);

    }


    //Potência
    public function testPotenciaPositiva() {
        $base = 2;
        $expoente = 3;
        $esperado = 8;

        $resultado = $this->calculator->potencia($base, $expoente);
        $this->assertEquals($esperado, $resultado);
    }

    public function testPotenciaNegativa() {
        $base = 2;
        $expoente = -2;
        $esperado = 0.25;

        $resultado = $this->calculator->potencia($base, $expoente);
        $this->assertEquals($esperado, $resultado);
    }

    public function testPotenciaZero() {
        $base = 5;
        $expoente = 0;
        $esperado = 1;

        $resultado = $this->calculator->potencia($base, $expoente);
        $this->assertEquals($esperado, $resultado);
    }

    //Raiz Quadrada
    public function testRaizQuadradaPostiva() {
        $numero = 25;
        $esperado = 5;

        $resultado = $this->calculator->raizQuadrada($numero);
        $this->assertEquals($esperado, $resultado);
    }

    public function testRaizQuadradaZero() {
        $numero = 0;
        $esperado = 0;

        $resultado = $this->calculator->raizQuadrada($numero);
        $this->assertEquals($esperado, $resultado);
    }

    public function testRaizQuadradaNegativa() {
        $this->expectException(\InvalidArgumentException::class);

        $numero = -9;
        $this->calculator->raizQuadrada($numero);
    }


    //Fatorial
    public function testFatorialZero() {
        $a = 0; 
        $esperado = 1; 

        $resultado = $this->calculator->fatorial($a); 
        $this->assertEquals($esperado, $resultado); 
    }

        public function testFatorialUm() {
        $a = 1;
        $esperado = 1;

        $resultado = $this->calculator->fatorial($a);
        $this->assertEquals($esperado, $resultado);
    }

    public function testFatorialNumeroMaior() {
        $a = 4;
        $esperado = 24;

        $resultado = $this->calculator->fatorial($a);
        $this->assertEquals($esperado, $resultado);
    }

    public function testFatorialNegativo() {
        $this->expectException(\InvalidArgumentException::class);

        $a= -20;
        $this->calculator->fatorial($a);
    }


    //Número Par
    
        public function testParPositivo() {
        $a = 4; 
        $esperado = true; 

        $resultado = $this->calculator->ehPar($a); 
        $this->assertEquals($esperado, $resultado); 
    }

    public function testImparPositivo() {
        $a = 3;
        $esperado = false;

        $resultado = $this->calculator->ehPar($a);
        $this->assertEquals($esperado, $resultado);
    }

    public function testParZero() {
        $a = 0;
        $esperado = true;

        $resultado = $this->calculator->ehPar($a);
        $this->assertEquals($esperado, $resultado);
    }

    public function testParNegativo() {
        $a= -2;
        $esperado = true;

        $resultado = $this->calculator->ehPar($a);
        $this->assertEquals($esperado, $resultado);
    }

    public function testImparNegativo() {
        $a = -5;
        $esperado = false;

        $resultado = $this->calculator->ehPar($a);
        $this->assertEquals($esperado, $resultado);
    }

    
    //Média
    public function testMedia() {
        $a = [1, 2, 3, 4, 5]; 
        $esperado = 3; 

        $resultado = $this->calculator->media($a); 
        $this->assertEquals($esperado, $resultado); 
    }

    public function testMediaNumero() {
        $a = [10];
        $esperado = 10;

        $resultado = $this->calculator->media($a);
        $this->assertEquals($esperado, $resultado);
    }

    public function testMediaVazio() {
        $this->expectException(\InvalidArgumentException::class);

        $a = [];
        $this->calculator->media($a);
    }



    //Maior Número
        public function testMaiorPositivos() {
        $a = [10, 20, 30, 40, 50];
        $esperado = 50;

        $resultado = $this->calculator->maiorNumero($a); 
        $this->assertEquals($esperado, $resultado); 
    }

    public function testMaiorNegativos() {
        $a = [-10, -20, -30, -40, -50];
        $esperado = -10;

        $resultado = $this->calculator->maiorNumero($a);
        $this->assertEquals($esperado, $resultado);
    }

    public function testMaiorNumeroMisto() {
        $a= [-10, -20, 30, -40, 50];
        $esperado = 50;

        $resultado = $this->calculator->maiorNumero($a);
        $this->assertEquals($esperado, $resultado);
    }

    public function testMaiorNumeroVazio() {
        $this->expectException(\InvalidArgumentException::class);

        $a = [];
        $this->calculator->maiorNumero($a);
    }
}