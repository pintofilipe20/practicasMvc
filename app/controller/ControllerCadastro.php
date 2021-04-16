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
use App\Model\ClassCadastro;

class ControllerCadastro extends ClassCadastro {
   
    protected $Id;
    protected $Nome;
    protected $Endereco;
    protected $Email;
    protected $Senha;
    protected $Acesso;

    use \Src\Traits\TraitUrlParse;

    public function __construct()
    {
        if (count($this->parseUrl())==1) {
            $Render= new ClassRender();
            $Render->setTitle("Cadastro");
            $Render->setDescription("site Mo
            delo feito com padrão de arquictectura de software MVC");
            $Render->setKeywords("MVC completo na practica sem freamwork");
            $Render->setDir("cadastro");
            $Render->renderLayout();
        }
        
    }
    //Receber as variaveis
    public function recVariaveis(){
        if (isset($_POST['Id'])) {
            $this->Id=$_POST['Id'];
        }
        if (isset($_POST['Nome'])) {
            $this->Nome=filter_input(INPUT_POST,'Nome', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['Endereco'])) {
            $this->Endereco=filter_input(INPUT_POST,'Endereco', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['Email'])) {
            $this->Email=filter_input(INPUT_POST,'Email', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['Senha'])) {
            $this->Senha=filter_input(INPUT_POST,'Senha', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['Acesso'])) {
            $this->Acesso=filter_input(INPUT_POST,'Acesso', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        
    }
    //chamar o metodo de cadastro e cadastrar
    public function cadastrar(){
        $this->recVariaveis();
        parent::cadastroClientes($this->Nome,$this->Endereco,$this->Email, $this->Senha,$this->Acesso);

        $_SESSION['sucesso']=true;
        echo "<script>window.location='".DIRPAGE."login'</script>";
    }
    //seleccionar e exibir dados
    public function seleciona(){ 
          $Recebe=$this->selecionaClientes(); 

          echo "
          <h1 class='titulo'>Usuarios Cadastrados</h1>
                <table>
                 <thead>
                 <tr>
                 <th>#</th>
                 <th>Nome</th>
                 <th>Endereço</th>
                 <th>Email</th>
                 </tr>
                 </thead> 
                 <tbody>   
                ";
            
          foreach ($Recebe as $linhas) {
                echo "
                    <tr>
                    <th>$linhas[id]</th>
                    <th>".utf8_encode($linhas['nome'])."</th>
                    <th>".utf8_encode($linhas['endereco'])."</th>
                    <th>$linhas[email]</th>
                    </tr>
                ";     
          }
          echo "</body></table>";
        
          }
    
}
?>