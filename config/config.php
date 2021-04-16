<?php 
/**
 * Copyright © 2021 por Pinto Filipe
 * Todos os direitos reservados.
 * Faça a sua parte e ajude alguém partilhando projectos(Open Source).
 * A única forma de evoluirmos é Partilhando ideia.
 * Qualquer sugestão é bem Vinda.
 * Eis a minha contribuição.
 */

//Directorios raizes

$PastaInterna="";

define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$PastaInterna}");

//no caso do servidor não ter barra

if(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/'){
 
define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$PastaInterna}"); 

}else{
    //caminho fisico
define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}/{$PastaInterna}");
}

//Directorios especificos
define('DIRIMG',DIRPAGE."public/img/");
define('DIRCSS',DIRPAGE."public/css/");
define('DIRJS',DIRPAGE."public/img/");


//Acesso a base de dados
define('HOST',"localhost");
define('DB',"praticamvc"); 
define('USER',"root");
define('PASS',"");




?>