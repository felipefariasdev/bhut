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

    public function testQtdRepetidosMultiploDeTresCincoAte100()
    {
        $return = $this->multiplos->run(3,5,100);
        
        $this->assertEquals(7, $return["qtdMtiplosRepetidos"]);
    }

    public function testQtdRepetidosMultiploDeDoisTresAte150()
    {
        $return = $this->multiplos->run(2,3,150);
        
        $this->assertEquals(26, $return["qtdMtiplosRepetidos"]);
    }
}