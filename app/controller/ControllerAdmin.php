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
use Src\Classes\ClassRender;

class ControllerAdmin extends ClassRender{
    public function __construct()
    {
        if (isset($_SESSION['admin'])) {
            $this->setTitle("Administrador");
            $this->setDir("admin");
            $this->addHead();
            $this->addHeader();
            $this->addMain();
            $this->addFooter();
        }else{
            echo "<script>window.location='".DIRPAGE."'</script>";
        }
        
       
    }
}
?>