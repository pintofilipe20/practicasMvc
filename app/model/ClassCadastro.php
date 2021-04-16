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

class ClassCadastro extends ClassConexao{
    
    private $Db;
    protected function cadastroClientes($Nome, $Endereco, $Email, $Senha,$Acesso){
        $Id=0;
        $this->Db=$this->conexaoDb()->prepare("INSERT into usuarios values(:id,:nome,:endereco,:email,:senha,:acesso)");
        $this->Db->bindParam(":id",$Id,\PDO::PARAM_INT);
        $this->Db->bindParam(":nome",$Nome,\PDO::PARAM_STR);
        $this->Db->bindParam(":endereco",$Endereco,\PDO::PARAM_STR);
        $this->Db->bindParam(":email",$Email,\PDO::PARAM_STR);
        $this->Db->bindParam(":senha",$Senha,\PDO::PARAM_STR);
        $this->Db->bindParam(":acesso",$Acesso,\PDO::PARAM_INT);
        $this->Db->execute();
    }

    protected function selecionaClientes(){
        $Acesso=0;
        $BFetch=$this->conexaoDb()->prepare("SELECT * from usuarios where acesso=:acesso");
        $BFetch->bindParam(":acesso",$Acesso,\PDO::PARAM_INT);
        $BFetch->execute();
        return $BFetch;
    }
    

}
?>