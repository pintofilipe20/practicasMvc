<?php
/**
 * Copyright © 2021 por Pinto Filipe
 * Todos os direitos reservados.
 * Faça a sua parte e ajude alguém partilhando projectos Open Source.
 * A única forma de evoluirmos é Partilhando ideia.
 * Qualquer sugestão é bem Vinda.
 * Eis a minha contribuição.
 */
namespace App\Controller;


class ControllerSairSessao{
    public function __construct()
    {
       session_destroy();
       echo "<script>window.location='".DIRPAGE."'</script>";
    }
}
?>