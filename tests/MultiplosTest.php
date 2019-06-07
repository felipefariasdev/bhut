<?php
use bhut\Multiplos;
use PHPUnit\Framework\TestCase;
class MultiplosTest extends TestCase
{
    
    protected $multiplos;

    public function setUp()
    {
        $this->multiplos = new Multiplos();
    }

    public function testMultiplosV1()
    {
        $valor_multiplo1 = 3;
        $valor_multiplo2 = 5;
        $ate_valor_maximo = 100;

        $return = $this->multiplos->multiploV1($valor_multiplo1,$ate_valor_maximo);
        $this->assertEquals(34, count($return));

    }

    public function testMultiplosV2()
    {
        $valor_multiplo1 = 3;
        $valor_multiplo2 = 5;
        $ate_valor_maximo = 100;

        $return = $this->multiplos->multiploV2($valor_multiplo2,$ate_valor_maximo,$return=[]);
        $this->assertEquals(21, count($return));
    }

    public function testMultiplosV1V2()
    {
        $valor_multiplo1 = 3;
        $valor_multiplo2 = 5;
        $ate_valor_maximo = 100;
        
        $return = $this->multiplos->multiploV1V2($valor_multiplo1,$valor_multiplo2,$ate_valor_maximo);
        $this->assertEquals(7, count($return));
    }
}