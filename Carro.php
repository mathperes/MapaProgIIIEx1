<?php

include 'Motor.php';

class Carro extends Motor {
    public $motor;
    public $modelo;
    public $cor;
    public $marca;
    public $ano;
    public $cambio;
    
    public function imprimeCarro(){
       echo "Caracteristicas do carro:<br>";
       echo "modelo: ",$this->modelo,"<br>";
       echo "Cor: ",$this->cor,"<br>";
       echo "Marca: ",$this->marca,"<br>";
       echo "Ano: ",$this->ano,"<br>";
       echo "Cambio: ",$this->cambio,"<br>";
}
    public function imprimeMotor(){
        echo "Caracteristicas do motor:<br>";
        echo "Cilindro: ",$this->cilindro,"<br>";
        echo "Potencia: ",$this->potencia,"<br>";
        echo "Giro Atual: ",$this->giroAtual,"<br>";
        echo "Combustivel: ",$this->combustivel,"<br>";
    }
}

?>