<?php 
/**
 * Copyright © 2021 por Pinto Filipe
 * Todos os direitos reservados.
 * Faça a sua parte e ajude alguém partilhando projectos(Open Source).
 * A única forma de evoluirmos é Partilhando ideia.
 * Qualquer sugestão é bem Vinda.
 * Eis a minha contribuição.
 */
namespace Src\Traits;
trait TraitUrlParse{

    //Dividir a URL em array
    public function parseUrl(){

        return explode("/",rtrim($_GET['url']), FILTER_SANITIZE_URL);
    }
}

?>