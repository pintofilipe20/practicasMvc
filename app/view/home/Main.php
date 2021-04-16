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
<nav class="banner">
     <img src="<?php  echo DIRIMG.'banner.jpg'; ?>" alt="">
     </nav>
     <article class="fazemos">
        <h1 class="titulo">O que fazemos?</h1>
        <span>Desfrute dos nossos serviços prontos para si.</span>
        <nav class="cards">
          <div class="card">
            <h3>Makeup Personalizado</h3>
            <p>Nos dias de hoje o serviço de Makeup se tornou um dos primordias ponto de atração, de estetica e beleza</p>
           
          </div>
          <div class="card">
            <h3>Manicure Personal</h3>
            <p>Nos dias de hoje o serviço de Makeup se tornou um dos primordias ponto de atração, de estetica e beleza.</p>
          </div>
          <div class="card">
            <h3>Pedicure Personal</h3>
            <p>Nos dias de hoje o serviço de Makeup se tornou um dos primordias ponto de atração, de estetica e beleza.</p>
           
          </div>
        </nav>
        
</article>
    <nav class="Reserva"> 
          <form action="<?php echo DIRPAGE.'reserva/cadastrar'; ?>" method="post">
            <label>Nome</label>
            <input type="text" name="Nome" id="Nome" placeholder="Primeiro e ultimo nome." required="">
            <label>Telefone</label>
            <input type="text" name="Telefone" id="Telefone" placeholder="Seu telefone" required="" maxlength="9" onkeypress='return SomenteNumero(event)'>
            <input type="submit" value="Revervar">
          </form>
        </nav>
        <div class="diserReserva">
          <h2>Reservar</h2>
          <span>Preencha o formulário para reservar um dia em que nós iremos marcar e impactar a sua vida. Não exite!</span>
 </div>