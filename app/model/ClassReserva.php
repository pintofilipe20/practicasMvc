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
use App\Model\ClassConexao;

class ClassReserva extends ClassConexao{
    
    private $Db;
    protected function cadastroReserva($Nome,$Telefone){
        $Id=0;
        $this->Db=$this->conexaoDb()->prepare("INSERT into reservas  values(:id,:nome,:telefone)");
        $this->Db->bindParam(":id",$Id,\PDO::PARAM_INT);
        $this->Db->bindParam(":nome",$Nome,\PDO::PARAM_STR);
        $this->Db->bindParam(":telefone",$Telefone,\PDO::PARAM_STR);
        $this->Db->execute();
        
    }
    protected function selecionaReservas(){
        $BFetch=$this->conexaoDb()->prepare("SELECT * from reservas");
        $BFetch->execute();
        return $BFetch;
    }
}
?>