<!--Este é o arquivo carro.php-->

<?php
require_once 'automovel.php';

class Carro extends Automovel {
    public function __construct(string $cor = 'azul', int $velocidadeInicial = 0) {
        #parent::__construct($cor);
        $this->cor = $cor;
        $this->setVelocidade($velocidadeInicial);
    }
    public function getCor(): string {
        #return parent::getCor();
        return $this->cor;
    }
}

