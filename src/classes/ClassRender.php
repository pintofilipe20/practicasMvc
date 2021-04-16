<?php 
/**
 * Copyright © 2021 por Pinto Filipe
 * Todos os direitos reservados.
 * Faça a sua parte e ajude alguém partilhando projectos(Open Source).
 * A única forma de evoluirmos é Partilhando ideia.
 * Qualquer sugestão é bem Vinda.
 * Eis a minha contribuição.
 */

namespace Src\Classes;


class ClassRender{
    private $Dir;
    private $Title;
    private $Description;
    private $keywords;

    public function getDir(){return $this->Dir;}
    public function setDir($Dir){$this->Dir=$Dir;}
    public function getTitle(){return $this->Title;}
    public function setTitle($Title){$this->Title=$Title;}
    public function getDescription(){return $this->Description;}
    public function setDescription($Description){$this->Description=$Description;}
    public function getKeywords(){return $this->Keywords;}
    public function setKeywords($Keywords){$this->Keywords=$Keywords;}

    //renderizar todo o layout
    public function renderLayout(){
        include_once(DIRREQ."app/view/Layout.php");
    }
    //adiciona caracteristicas espeficas no head
    public function addHead(){
        if (file_exists(DIRREQ."app/view/{$this->getDir()}/Head.php")) {
                include_once(DIRREQ."app/view/{$this->getDir()}/Head.php");
             }
            }
    //adiciona caracteristicas espeficicas no headER
    public function addHeader(){
       if (file_exists(DIRREQ."app/view/{$this->getDir()}/Header.php")) {
               include_once(DIRREQ."app/view/{$this->getDir()}/Header.php");
            }
    }
    //adidiona caracteristicas no Main
    public function addMain(){
        if (file_exists(DIRREQ."app/view/{$this->getDir()}/Main.php")) {
            include_once(DIRREQ."app/view/{$this->getDir()}/Main.php");
         }
    }
    //adidiona caracteristicas no Footer  
    public function addFooter(){
        if (file_exists(DIRREQ."app/view/{$this->getDir()}/Footer.php")) {
            include_once(DIRREQ."app/view/{$this->getDir()}/Footer.php");
         }
    }
}
?>