<?php
class fruta{
public $nome;
public$cor;   

function_construct($nome,$cor)  
 $this->nome= $nome;
 $this->cor =$cor;
 
}

function get-nome() {
    return $this->nome
}

function get-cor() {
    return $this-> cor
        
    }


$maca = new fruta ("maça,vermelha")

echo "O nome da fruta e: ".$maca->get_nome();
echo " A cor da fruta e:",$maca->get_cor();


