<?php

class Lutador{
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;


    public function __construct($nome_C, 
    $nacionalidade_C, 
    $idade_C, 
    $altura_C, 
    $peso_C,  
    $vitorias_C, 
    $derrotas_C, 
    $empates_C){

        $this->nome = $nome_C;
        $this->nacionalidade = $nacionalidade_C;
        $this->idade = $idade_C;
        $this->altura = $altura_C;
        $this-> setPeso ($peso_C);
        $this->vitorias = $vitorias_C;
        $this->derrotas = $derrotas_C;
        $this->empates = $empates_C;

    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome_S){
        $this->nome = $nome_S;
    }
    public function getNacionalidade(){
        return $this->nacionalidade;
    }
    public function setNacionalidade($nacionalidade_S){
        $this->nacionalidade = $nacionalidade_S;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($idade_S){
        $this->idade = $idade_S;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function setAltura($altura_S){
        $this->altura = $altura_S;
    }
    public function getPeso(){
        return $this->peso;
    }
    public function setPeso($peso_S){
        $this->peso = $peso_S;
        $this->setCategoria();
    }
    private function setCategoria(){
        if ($this->peso < 53.2){
            $this->categoria = 'Inválido';
        }elseif ($this->peso <= 70.3){
            $this->categoria = 'Leve';
        }elseif($this->peso <= 83.9){
            $this->categoria = 'Médio';
        }elseif($this->peso <= 120.2){
            $this->categoria ='Pesado';
        }else{
            $this->categoria = 'Inválido';
        }
    }

    public function getCategoria(){
        return $this->categoria;
    }
    
    public function getVitorias(){
        return $this->vitorias;
    }
    public function setVirorias($vitorias_S){
        $this->vitorias = $vitorias_S;
    }
    public function getDerrotas(){
        return $this->derrotas;
    }
    public function setDerrotas($derrotas_S){
        $this->derrotas = $derrotas_S;
    }
    public function getEmpates(){
        return $this->empates;
    }
    public function setEmpates($empates_S){
        $this->empates = $empates_S;
    }

    public function ganharLuta(){
        $this->setVirorias($this->getVitorias()+1);
    }
    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas()+1);
    }
    public function empatarLuta(){
        $this->setEmpates($this->getEmpates()+1);
    }

    public function apresentar(){
        echo "<pre>";
        echo "<________APRESENTAÇÃO__________>";
        
        echo "<br>";
        echo "<pre>";
        echo "Lutador : ".$this->getNome();
        echo "</pre>";
        echo "<pre>";
        echo "Idade: ".$this->getIdade();
        echo "</pre>";
        echo "<pre>";
        echo "Peso: ".$this->getPeso();
        echo "</pre>";
        echo "<pre>";
        echo "Altura: ".$this->getAltura();
        echo "</pre>";
        echo "<pre>";
        echo "Nacionalidade: ".$this->getNacionalidade();
        echo "</pre>";
        echo "<pre>";
        echo "Vitórias: ".$this->getVitorias();
        echo "</pre>";
        echo "<pre>";
        echo "Empates: ".$this->getEmpates();
        echo "</pre>";
        echo "<pre>";
        echo "Derrotas: ".$this->getDerrotas();
        echo "</pre>";
    }
    public function status(){
        echo "<pre>";
        echo "<________CARTEL__________>";
        echo "<br>";
        echo $this->getNome();
        echo " é um peso ".$this->getCategoria();
        echo "<br>";
        echo $this->getVitorias()." vitórias";
        echo "<br>";
        echo $this->getEmpates()." empates.";
        echo "<br>";
        echo $this->getDerrotas()." derrotas.";
        echo "<br>";
        echo "</pre>";
    }
    /*public function status($status){
        if ($status == 'Vitoria'){
            $this.setVirorias(getVirotias()+1);
        } else if ($status == 'Empate'){
            $this.setEmpates(getEmpates()+1);
        }else{
            $this.setDerrotas(getDerrotas()+1);
        }
    }*/
    
   
}




