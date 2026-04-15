<?php
class Carro {
    // 🚩 RISCO: Atributo público permite valores ilegais
    public $modelo;
    private $velocidade;

    public function __construct($modelo, $velocidade) {
        $this->modelo = $modelo;
        $this->velocidade = $velocidade;
    }

    public function getVelocidade()
        {
            return $this->velocidade;
        }

    public function setVelocidade($novaVelocidade)
        {
            $this->velocidade = $novaVelocidade;

            if ($novaVelocidade >= 200) {
                echo "Você está acima da velocidade.";
            } else {
                echo "Continue com esta velocidade.";
            }
        }

}

// --- TESTE DO VEÍCULO ---
$meuCarro = new Carro("Senai-Mobile", 0);

// O desastre: alteração direta sem validação
$meuCarro->velocidade = 200; // Velocidade de foguete?
$meuCarro->velocidade = 0;   // Carro andando no tempo?

echo "Modelo: " . $meuCarro->modelo . "<br>";
echo "Velocidade atual: " . $meuCarro->velocidade . " km/h";
?>