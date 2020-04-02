<?php
use PHPUnit\Framework\TestCase;
use Jokenpo\Jokenpo as Jokenpo;
use PHPUnit_Framework_Constraint_IsType as PHPUnit_IsType;

/**
 * @property Jokenpo jokenpo
 */
class JokenpoTeste extends TestCase
{
    public $jokenpo;

    // Inicializa o test case para cada instancia
    public function setUp() {
        $this->jokenpo = new Jokenpo();
    }

    public function testeInteiro() {
        $resultado = $this->jokenpo->getSorteio();
        $this->assertInternalType(PHPUnit_IsType::TYPE_INT, $resultado);
    }

    public function testePedraVence() {
        $jogador1 = 0;
        $jogador2 = 2;
        $resultado = $this->jokenpo->getResultadoPartidaTeste($jogador1, $jogador2);
        $this->assertInternalType(PHPUnit_IsType::TYPE_STRING, $resultado);
        $this->assertEquals($resultado, 'Pedra vence tesoura');
    }

    public function testePapelVence() {
        $jogador1 = 1;
        $jogador2 = 0;
        $resultado = $this->jokenpo->getResultadoPartidaTeste($jogador1, $jogador2);
        $this->assertInternalType(PHPUnit_IsType::TYPE_STRING, $resultado);
        $this->assertEquals($resultado, 'Papel vence pedra');
    }

    public function testeTesouraVence() {
        $jogador1 = 2;
        $jogador2 = 1;
        $resultado = $this->jokenpo->getResultadoPartidaTeste($jogador1, $jogador2);
        $this->assertInternalType(PHPUnit_IsType::TYPE_STRING, $resultado);
        $this->assertEquals($resultado, 'Tesoura vence papel');
    }

    public function testeEmpate() {
        $jogador1 = 0;
        $jogador2 = 0;
        $resultado = $this->jokenpo->getResultadoPartidaTeste($jogador1, $jogador2);
        $this->assertEquals($resultado, 'Empate');
    }
}