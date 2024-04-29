<?php
require_once 'carro.php';
require_once 'moto.php';

$carro = new Carro('vermelho', 50);
$moto = new Moto('azul', 100);

$velocidadeCarro = $carro->acelerar();

$velocidadeMoto = $moto->acelerar();

echo "Velocidade do carro: " . $velocidadeCarro ."<br>";
echo "Cor do carro: " . $carro->getCor() . "<br>";
echo "Velocidade da moto: " . $velocidadeMoto . "<br>";
echo "Cor da moto: " . $moto->getCor() . "<br>";