<?php
use PHPUnit\Framework\TestCase;
require 'Comparador.php';

class ComparadorTests extends TestCase
{
    private $comparador;
 
    protected function setUp()
    {
        $this->comparador = new Comparador();
    }
 
    protected function tearDown()
    {
        $this->comparador = NULL;
    }
 
    public function testPar()
    {
        $result = $this->comparador->par(2);
        $this->assertEquals(true, $result);
		
		$result2 = $this->comparador->par(7);
        $this->assertEquals(false, $result2);
		
		$result3 = $this->comparador->par(100);
        $this->assertEquals(true, $result3);
		
		$result4 = $this->comparador->par(2018);
        $this->assertEquals(true, $result4);
		
		$result5 = $this->comparador->par(39);
        $this->assertEquals(false, $result5);
    }

    public function testImpar()
    {
        $result = $this->comparador->impar(5);
        $this->assertEquals(true, $result);
		
		$result2 = $this->comparador->impar(2);
        $this->assertEquals(false, $result2);
    }

    public function testMenor()
    {
        $result = $this->comparador->menor(10, 2);
        $this->assertEquals(false, $result);
    }
 
	public function testMayor()
    {
        $result = $this->comparador->mayor(10, 2);
        $this->assertEquals(true, $result);
    }
	
	public function testIgual()
    {
        $result = $this->comparador->igual(10, 2);
        $this->assertEquals(false, $result);
    }
	
	public function testDistinto()
    {
        $result = $this->comparador->diferente(10, 2);
        $this->assertEquals(true, $result);
    }
}
