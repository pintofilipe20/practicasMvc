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
<form action="<?php echo DIRPAGE.'cadastro/cadastrar'; ?>" 
method="post" name="FormCadastro" id="FormCadastro">
<br><h1 class="titulo">Cadastro</h1><br>
<label for="">Nome</label> 
<input type="text" name="Nome" id="Nome" required="" placeholder="Primeiro e Ultimo nome."><br>
<label for="">Endereço</label>
<input type="text" name="Endereco" id="Endereco" required="" placeholder="onde vives"><br>
<label for="">Email</label>
<input type="text" name="Email" id="Email" required="" placeholder="Seu email"><br>
<label for="">Senha</label>
<input type="password" name="Senha" id="Cidade" required="" placeholder="Insira a sua senha"><br>
<input type="hidden" name="Acesso" value="" >
<input type="submit" value="Cadastrar"><br>
</form>
</div> 
</article>
