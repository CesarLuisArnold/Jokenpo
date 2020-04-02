<?php
namespace Jokenpo;

class Jokenpo
{
    // Declara um construtor público
    public function __construct() { }

    const PEDRA = 0;
    const PAPEL = 1;
    const TESOU = 2;

    protected $vitoriasJogador1 = 0;
    protected $vitoriasJogador2 = 0;
    protected $resultadoPartida = 0;
    protected $resultadoPartidaTeste = '';
    protected $jogadorVencedor = 0;
    
    /**
    * @param $ppt
    * @return string
    */
    public function getMao($ppt) {

        $mao[0]='Pedra';
        $mao[1]='Papel';
        $mao[2]='Tesoura';

        return $mao[$ppt];
    }

    /**
     * @return int
     */
    public function getSorteio(){

        // retorna 0-PEDRA, 1-PAPEL ou 2-TESOU
        return rand(0, 2);
    }

    /**
    * @param $maoJ1
    * @param $maoJ2
    */
    // matriz de possibilidades
    private function setResultadoPartida($maoJ1, $maoJ2){
        $ganhador[0][0] = 0;
        $ganhador[0][1] = 2;
        $ganhador[0][2] = 1;
        $ganhador[1][0] = 1;
        $ganhador[1][1] = 0;
        $ganhador[1][2] = 2;
        $ganhador[2][0] = 2;
        $ganhador[2][1] = 1;
        $ganhador[2][2] = 0;

        $resultado[0][0] = 'Empate';
        $resultado[0][1] = 'Papel vence pedra';
        $resultado[0][2] = 'Pedra vence tesoura';
        $resultado[1][0] = 'Papel vence pedra';
        $resultado[1][1] = 'Empate';
        $resultado[1][2] = 'Tesoura vence papel';
        $resultado[2][0] = 'Pedra vence tesoura';
        $resultado[2][1] = 'Tesoura vence papel';
        $resultado[2][2] = 'Empate';
        
        $this->resultadoPartida = $ganhador[$maoJ1][$maoJ2];
        $this->resultadoPartidaTeste = $resultado[$maoJ1][$maoJ2];
    }

    /**
    * @param $maoJ1
    * @param $maoJ2
    * @return int
    */
    public function getResultadoPartida($maoJ1, $maoJ2){
        $this->setResultadoPartida($maoJ1, $maoJ2);

        return $this->resultadoPartida;
    }

    /**
    * @param $maoJ1
    * @param $maoJ2
    * @return string    
    */
    public function getResultadoPartidaTeste($maoJ1, $maoJ2){
        $this->setResultadoPartida($maoJ1, $maoJ2);

        return $this->resultadoPartidaTeste;
    }

    /**
    * @param $resultado
    */
    public function setVitoriasJogador($resultado){

        if($resultado == 1) {
            $this->vitoriasJogador1++;
        }
        elseif ($resultado == 2) {
            $this->vitoriasJogador2++;
        }
    }

    /**
    */
    public function setJogadorVencedor(){

        if($this->vitoriasJogador1>$this->vitoriasJogador2) {
            $this->jogadorVencedor = 1;
        }
        elseif ($this->vitoriasJogador2>$this->vitoriasJogador1) {
            $this->jogadorVencedor = 2; 
        }
        else {
            $this->jogadorVencedor = 0;
        }
    }

    /**
    * @return int
    */
    public function getJogadorVencedor(){

        $this->setJogadorVencedor();
        return $this->jogadorVencedor;
    }

    /**
    * @return string
    */
    public function getDecisaoJuiz(){
        $decisao = '';

        if ($this->jogadorVencedor == 0) {
            $decisao = 'Houve empate.';
        }
        else {
            $decisao = 'Jogador ' . $this->jogadorVencedor . ' foi o vencedor.';
        }
        return $decisao;
    }
}