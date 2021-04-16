<?php 
/**
 * Copyright © 2021 por Pinto Filipe
 * Todos os direitos reservados.
 * Faça a sua parte e ajude alguém partilhando projectos Open Source.
 * A única forma de evoluirmos é Partilhando ideia.
 * Qualquer sugestão é bem Vinda.
 * Eis a minha contribuição.
 */
namespace App\Model;

use PDO;

//abtract para simplismente poder ser extendida e não instanciada  
 abstract class ClassConexao{
  
    public function conexaoDb(){
        try {
            $Con=new \PDO("mysql:host=".HOST."; dbname=".DB."","".USER."","".PASS."");
            return $Con;  
        } catch (\PDOException $Erro) {
           return $Erro->getMessage();
        }
    }

}

?>