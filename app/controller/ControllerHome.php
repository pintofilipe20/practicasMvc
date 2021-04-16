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
use Src\Interfaces\InterfaceView;

class ControllerHome extends ClassRender implements InterfaceView{
    public function __construct()
    {
       $this->setTitle("Pagina Inicial");
       $this->setDescription("site Mo
       delo feito com padrão de arquictectura de software MVC");
       $this->setKeywords("MVC completo na practica sem freamwork");
       $this->setDir("home");
       $this->renderLayout();
    }
   
}
?>