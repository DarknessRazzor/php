<?php
/* CalculadoraTest.php */
use Calculadora;
use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase { //El nombre de las funciones de pruebas debe comenzar por test*
    public function testSumar() {
        $cal = new Calculadora();
        $this->assertEquals(6, $cal->sumar(2, 4), "6"); //test para corroborar si suma correctamente
        $this->assertNotEquals(12, $cal->sumar(9, 1), "10"); //test para corroborar si al sumar mal, salta error
        $this->assertEquals(2, $cal->sumar(1,1),"2");
    }
    public function testRestar(){
        $cal = new Calculadora();
        $this->assertEquals(-2, $cal->restar(2,4),"-2"); //test para corroborar si resta correctamente
        $this->assertNotEquals(12, $cal->restar(9,1),"8"); //test para corroborar si al restar mal, salta error
        $this->assertEquals(0, $cal->restar(1,1),"0");
    }
    public function testMultiplicar(){
        $cal = new Calculadora();
        $this->assertEquals(8, $cal->multiplicar(2,4),"8"); //test para corroborar si multiplica correctamente
        $this->assertNotEquals(10, $cal->multiplicar(3,3),"9"); //test para corroborar si al multiplicar mal, salta error
        $this->assertEquals(2, $cal->multiplicar(2,1),"2");
    }
    public function testDividir(){
        $cal = new Calculadora();
        $this->assertEquals(7, $cal->dividir(14,2),"7"); //test para corroborar si divide correctamente
        $this->assertEquals(10, $cal->dividir(50,5),"10"); //test para corroborar si al dividir mal, salta error
        $this->assertNotEquals(0, $cal->dividir(5,5),"1");
    }

}
?>