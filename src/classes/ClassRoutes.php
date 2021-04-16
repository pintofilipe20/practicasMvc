<?php 
/**
 * Copyright © 2021 por Pinto Filipe
 * Todos os direitos reservados.
 * Faça a sua parte e ajude alguém partilhando projectos(Open Source).
 * A única forma de evoluirmos é Partilhando ideia.
 * Qualquer sugestão é bem Vinda.
 * Eis a minha contribuição.
 */
namespace Src\Classes;
use Src\Traits\TraitUrlParse;

class ClassRoutes{
 use TraitUrlParse;

 private $Rotas;
 public function getRota(){
     $Url=$this->parseUrl(); 
     $I=$Url[0];
     
    //tranformar em array
    //colocar todas Url do site
     $this->Rotas=array(
        ""=>"ControllerHome",
        "home"=>"ControllerHome",
        "cadastro" =>"ControllerCadastro",
        "reserva" =>"ControllerReserva",
        "sair" =>"ControllerSairSessao",
        "admin" =>"ControllerAdmin",
        "login" =>"ControllerLogin"
       

     );
     if (array_key_exists($I,$this->Rotas)) {
        if(file_exists(DIRREQ."app/controller/{$this->Rotas[$I]}.php")){

        return $this->Rotas[$I];
     }else{
         //se não existir na rota
        return "Controller404";
    }
    }else{
        //se digitar algo inexistente
        return "Controller404";
    }
}

}
    
?>