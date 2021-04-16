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
use Src\Classes\ClassRoutes;
use Src\Interfaces\InterfaceView;
use App\Model\ClassReserva;

class ControllerReserva extends ClassReserva {
   
    protected $Nome;
    protected $Telefone;
    

    use \Src\Traits\TraitUrlParse;

    public function __construct()
    {
        
        if (count($this->parseUrl())==1) {
            $Render= new ClassRender();
            $Render->setTitle("Reserva");
            $Render->setDescription("site Mo
            delo feito com padrão de arquictectura de software MVC");
            $Render->setKeywords("MVC completo na practica sem freamwork");
            $Render->setDir("reserva");
            $Render->renderLayout();
        }
        
        
    }
    //Receber as variaveis
    public function recVariaveis(){
        if (isset($_POST['Nome'])) {
            $this->Nome=filter_input(INPUT_POST,'Nome', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['Telefone'])) {
            $this->Telefone=filter_input(INPUT_POST,'Telefone', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        
    }
    //chamar o metodo de cadastro e cadastrar
    public function cadastrar(){
        $this->recVariaveis();
        parent::cadastroReserva($this->Nome,$this->Telefone);
        $_SESSION['sucesso']=true;
        echo "<script>window.location='".DIRPAGE."'</script>";
        
    }
    public function seleciona(){ 
        $Recebe=$this->selecionaReservas(); 

        echo "
        <h1 class='titulo'>Reservas Feitas</h1>
              <table>
               <thead>
               <tr>
               <th>#</th>
               <th>Nome</th>
               <th>Telefone</th>
               </tr>
               </thead> 
               <tbody>   
              ";
          
        foreach ($Recebe as $linhas) {
              echo "
                  <tr>
                  <th>$linhas[id]</th>
                  <th>".utf8_encode($linhas['nome'])."</th>
                  <th>$linhas[telefone]</th>
                  </tr>
              ";     
        }
        echo "</body></table>";
      
        }

}
?>