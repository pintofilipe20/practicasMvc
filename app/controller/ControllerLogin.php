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

use App\Model\ClassLogin;
use \Src\Classes\ClassRender;
class ControllerLogin extends ClassLogin{
    
    use \Src\Traits\TraitUrlParse;
    public function __construct()
    {
        
       if (count($this->parseUrl())==1) {
            $Render= new ClassRender();
            $Render->setTitle('Login');
            $Render->setDescription('faça login');
            $Render->setDir('login');
            $Render->renderLayout();
        }
    }
    public function validarLogin(){
        $Validacao=$this->validarUsuario($_POST['Email'],$_POST['Senha']);
        
        switch ($Validacao['acesso']){
            case '1':
               
                $_SESSION['admin']=$Validacao['nome'];
                echo "<script>window.location='".DIRPAGE."admin'</script>";
                break;
            case '0':
                   
                    $_SESSION['login']=$Validacao['nome'];
                    echo "<script>window.location='".DIRPAGE."'</script>";
                    break;
            default:
                
                $_SESSION['ErroCadastro']=true;
                echo "<script>window.location='".DIRPAGE."login'</script>";
                break;
        }
        

    }
}


?>