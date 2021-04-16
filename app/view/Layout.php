
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?php echo $this->getdescription();?>">
    <meta name="keywords" content="<?php echo $this->getKeywords();?>">
    <name name="author" content="Pinto Filipe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo DIRCSS.'index.css';?>">
    <link rel="stylesheet" type="text/css" href="<?php echo DIRCSS.'font-awesome.css';?>">
    <title><?php echo $this->getTitle();?></title>
    <?php  echo $this->addHead(); ?>
</head>
<body> 
<header class="Header">
    <div class="cabecalho">
        <div class="logo">
            <h1>xPMakeup</h1>
        </div>
        <div class="menu">
            <ul>
        <li><a href="<?php  echo DIRPAGE; ?>"><i class="fa fa-home"></i>Página Inicial</a></li>
        <li><a href="<?php  echo DIRPAGE.'cadastro';?>"><i class="fa fa-user"></i>Cadastro</a>
        <li><a href="<?php  echo DIRPAGE.'login';?>"><i class="fa fa-user"></i>Login</a>
        <li><a style="color:violet;"><?php if(isset($_SESSION['login'])){echo "$_SESSION[login]<li><a  href=".DIRPAGE."sair style='color:violet;'><i class='fa fa-close'></i></a>";}?></a></li>
        </ul>
        </div>
    </div>
    <?php  echo $this->addHeader(); ?>
</header>
 <section class="Main">
 <?php

  if(isset($_SESSION['sucesso'])){ 
      echo "
        <div class='sucessodepoimento'>
            <div class='modalsucesso'>
            <h3>SUCESSO</h3>
            <p>Operação efectuada com Sucesso!</p>
            <span><i class='fa fa-close' id='fecharModal'></i></span>
            </div>
        </div>
 ";
} 
 unset($_SESSION['sucesso']);
?>
 <?php  echo $this->addMain(); ?>
 </section>
</body>
<footer class="Footer">
     <p>Practicas MVC sem FrameWork.</p>
     <script src="<?php echo DIRPAGE.'public/js/JQuery.js';?>"></script>
    <script src="<?php echo DIRPAGE.'public/js/Javascript.js';?>"></script>
    <script language='JavaScript'>
    function SomenteNumero(e){
        var tecla=(window.event)?event.keyCode:e.which;   
        if((tecla>47 && tecla<58)) return true;
        else{
            if (tecla==8 || tecla==0) return true;
        else  return false;
        }
    }
    </script>
 <?php  echo $this->addFooter(); ?>
</footer>
</html>
