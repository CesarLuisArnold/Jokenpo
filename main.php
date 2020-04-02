<?php

require 'vendor/autoload.php';

use Jokenpo\Jokenpo;

$jogo = new Jokenpo();

$jogador1 = $jogo->getSorteio();
$jogador2 = $jogo->getSorteio();

echo 'Jogador 1: ' . $jogador1 . '-' . $jogo->getMao($jogador1) . PHP_EOL;
echo 'Jogador 2: ' . $jogador2 . '-' . $jogo->getMao($jogador2) . PHP_EOL;

$resultadoPartida = $jogo->getResultadoPartida($jogador1, $jogador2);
echo $jogo->getResultadoPartidaTeste($jogador1, $jogador2) . PHP_EOL;

echo $jogo->setVitoriasJogador($resultadoPartida) . PHP_EOL;

$vencedor = $jogo->getJogadorVencedor();

echo $jogo->getDecisaoJuiz() . PHP_EOL;