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

class ClassLogin extends ClassConexao{

    protected function validarUsuario($Email,$Senha)
    {
        $BFetch=$this->conexaoDb()->prepare("SELECT * from usuarios where email=:email and senha=:senha");
        $BFetch->bindParam(':email',$Email,\PDO::PARAM_STR);
        $BFetch->bindParam(':senha',$Senha,\PDO::PARAM_STR);
        $BFetch->execute();

        if ($row=$BFetch->rowCount()>0) {
            while ($row=$BFetch->fetch(\PDO::FETCH_ASSOC)) {
                
                $Array=$row;
                
            }
            return $Array;
        }else{
            return false;
        }

    }
}

?>