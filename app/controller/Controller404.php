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

class Controller404 extends ClassRender{
    public function __construct()
    {
        $this->setTitle("ERRO");
        $this->setDir("erros");
        $this->addHead();
        $this->addHeader();
        $this->addMain();
        $this->addFooter();
    }
}
?>