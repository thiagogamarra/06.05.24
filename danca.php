<?php
class Danca {
    public $nomeDaMusica;
    public $ritmo;   

    function __construct($nomeDaMusica, $ritmo) { 
        $this->nomeDaMusica = $nomeDaMusica;
        $this->ritmo = $ritmo;
    }

    function get_nomeDaMusica() {
        return $this->nomeDaMusica;
    }

    function get_ritmo() {
        return $this-> ritmo;
    }
}

$nomeDaMusica = new Danca ("NDA","pop");

echo "O nome da danca é: " . $nomeDaMusica->get_nomeDaMusica();
echo " A ritmo da danca é:" . $nomeDaMusica->get_ritmo();
