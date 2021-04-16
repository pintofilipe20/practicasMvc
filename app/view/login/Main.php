<!--
/**
 * Copyright © 2021 por Pinto Filipe
 * Todos os direitos reservados.
 * Faça a sua parte e ajude alguém partilhando projectos Open Source.
 * A única forma de evoluirmos é Partilhando ideia.
 * Qualquer sugestão é bem Vinda.
 * Eis a minha contribuição.
 */
-->
<article class="processaCadastro">
<div class="Reserva login">
    <br><h1 class="titulo">Entrar</h1><br>
    <?php 
    if(isset($_SESSION['ErroCadastro'])){
    echo "
    <center><p class='ErroCadastro'>Dados Incorrectos!</p></center>
    ";
     }
     unset($_SESSION['ErroCadastro']);
    ?>
<form action="<?php  echo DIRPAGE.'login/validarLogin'?>" name="FormLogin" id="FormLogin" method="post">
<label for="">Email</label>
<input type="text" name="Email" id="Email" placeholder="usuario.." required=""><br>
<label for="">Senha</label>
<input type="password" name="Senha" id="Senha" placeholder="senha.." required=""><br>
<input type="submit" value="Entrar">
</form>
</div>
</article>