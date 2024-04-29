<!--Este é o arquivo automovel.php-->
<?php

class Automovel{
    private string $cor;
    private int $velocidade;

    public function __construct(string $cor = 'azul') {
        $this->cor = $cor;
        $this->velocidade = 0;
    }


    public function acelerar(): int
    {
        $this->velocidade++;
        return $this->velocidade;
    }

    public function setVelocidade (int $velocidade):void
    {
        if($velocidade>0 &&  $velocidade < 200)
        {
            $this->velocidade=$velocidade;
        }
    }
    public function getVelocidade():int
    {
        return $this->velocidade;
    }
    public function getCor(): string {
        return $this->cor;
    }
}

