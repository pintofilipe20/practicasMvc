<?php
/**
 * Copyright © 2021 por Pinto Filipe
 * Todos os direitos reservados.
 * Faça a sua parte e ajude alguém partilhando projectos(Open Source).
 * A única forma de evoluirmos é Partilhando ideia.
 * Qualquer sugestão é bem Vinda.
 * Eis a minha contribuição.
 */
namespace App;

use Src\Classes\ClassRoutes;

class Dispath extends ClassRoutes{
    //Atributos
    private $Method;
    private $Param=[];
    private $Obj;


    protected function getMehod(){
        return $this->Method;
    }
    public function setMehod($Method){
        $this->Method = $Method;
    }

    protected function getParam(){
        return $this->Param;
    }
    public function setParam($Param){
        $this->Param = $Param;
    }

public function __construct()
{
     //direcionar
    self::addController();
}
//Metodo de adição de controller

private function addController(){
    $RotaController=$this->getRota();
    $NameS="App\\Controller\\{$RotaController}";
    $this->Obj=new $NameS;

    //para chamar addMethod
    if (isset($this->parseUrl()[1])) {
        self::addMethod();
    }
    
}
//Metodo de adição do metodo controller
private function addMethod(){
//verifica se existe um metodo dentro do objecto($bj)
if (method_exists($this->Obj,$this->parseUrl()[1])) {
    $this->setMehod("{$this->parseUrl()[1]}");
    self::addParam();
    call_user_func_array([$this->Obj,$this->getMehod()],$this->getParam());
}
}


//Metodo de adição de parâmetro do controller
private function addParam(){
//contar quantos elementos tem o nosso array

$contArray=count($this->parseUrl());

if ($contArray > 2) {
    foreach($this->parseUrl() as $indice =>$value){
        //se for maior que um setar o parametro
        if ($indice > 1) {
            $this->setParam($this->Param += [$indice =>$value]);
        }
         
        //echo '<br>'.$indice."=>".$value.'<br>';  
    }
    
}
}
}
?>