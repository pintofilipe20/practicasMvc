<?php 
/**
 * Copyright © 2021 por Pinto Filipe
 * Todos os direitos reservados.
 * Faça a sua parte e ajude alguém partilhando projectos(Open Source).
 * A única forma de evoluirmos é Partilhando ideia.
 * Qualquer sugestão é bem Vinda.
 * Eis a minha contribuição.
 */
namespace Src\Interfaces;

interface InterfaceView{
    
    public function setDir($Dir);
    public function setTitle($Title);
    public function setDescription($Description);
    public function setKeywords($Keywords);
    public function renderLayout();

}
?>