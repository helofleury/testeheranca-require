<!--Este é o arquivo moto.php-->
<?php
require_once 'automovel.php';

class Moto extends Automovel {
    public function __construct(string $cor = 'azul', int $velocidade) {
        #parent::__construct();
        $this->cor = $cor;
        $this->setVelocidade($velocidade);
    }
    public function getCor(): string {
        #return parent::getCor();
        return $this->cor;
    }

}