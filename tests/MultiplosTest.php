<?php
use bhut\Multiplos;
use PHPUnit\Framework\TestCase;

class MultiplosTest extends TestCase
{
    
    protected $multiplos;
    protected $ate_valor_maximo;

    public function setUp()
    {
        $this->multiplos = new Multiplos();
        $this->ate_valor_maximo = 100;
    }
    /**
     * Teste multiplo de 3 até o número 100
     */
    public function testMultiplosV1()
    {
        $return = $this->multiplos->multiploV1(3,$this->ate_valor_maximo);
        $this->assertEquals(34, count($return));

    }
    /**
     * Teste multiplo de 5 até o número 100
     */
    public function testMultiplosV2()
    {
        $return = $this->multiplos->multiploV2(5,$this->ate_valor_maximo);
        $this->assertEquals(21, count($return));
    }

    /**
     * Teste multiplo de 3 e 5 até o número 100
     */
    public function testMultiplosV1V2()
    {
        $return = $this->multiplos->multiploV1V2(3,5,$this->ate_valor_maximo);
        $this->assertEquals(7, count($return));
    }
}