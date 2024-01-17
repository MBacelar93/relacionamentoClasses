<?php

require_once 'Lutador.php';
class Luta{
    private $desafiado, $desafiante, $rounds, $aprovada; 

    public function marcarLuta($l1, $l2){
        $this->desafiado = $l1;
        $this->desafiante = $l2;
        if($l1->getCategoria() === $l2->getCategoria() && $l1 != $l2){
            if ($l1->getCategoria()  ==='Inválido' || $l2->getCategoria()==='Inválido'){
                $this->aprovada = false;
                $this->desafiado = null;
                $this->desafiante = null;
            }
            else{
                $this->aprovada = true;
                $this->desafiado = $l1;
                $this->desafiante = $l2;
            } 
        }else{
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }

    public function lutar(){
        if($this->aprovada){
            $this->desafiado->apresentar();
            

            echo '<br>';

            $this->desafiante->apresentar();
            

            $vencedor = rand(0,2);
            echo $vencedor;
            switch($vencedor){
            case 0:
                echo ' Empate';
                $this->desafiado->empatarLuta();
                $this->desafiante->empatarLuta();
            break;
            case 1:
                echo ' Desafiado foi o vencedor';
               $this->desafiado->ganharLuta();
               $this->desafiante->perderLuta();
               echo '<br>';
               $this->desafiado->status();
               echo '<br>';
            break;
            case 2:
                echo ' Desafiante foi o vencedor';
                $this->desafiado->perderLuta();
                $this->desafiante->ganharLuta();
                echo '<br>';
                $this->desafiante->status();
                echo '<br>';
            break;
            }

        }else{
            echo "Luta não aprovada!";
        }
    }

    public function getDesafiado(){
        return $this->desafiado;
    }
    public function setDesafiado($desafiado_S){
        $this->desafiado = $desafiado_S;
    }
    public function getDesafiante(){
        return $this->desafiado;
    }
    public function setDesafiante($desafiado_S){
        $this->desafiado = $desafiado_S;
    }
    public function getRounds(){
        return $this->rounds;
    }
    public function setRounds($rounds_S){
        $this->rounds = $rounds_S;
    }
    public function getAprovada(){
        return $this->aprovada;
    }
    public function setAprovada($aprovada_S){
        $this->aprovada = $aprovada_S;
    }
}
