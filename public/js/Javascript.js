/**
 * Copyright © 2021 por Pinto Filipe
 * Todos os direitos reservados.
 * Faça a sua parte e ajude alguém partilhando projectos(Open Source).
 * A única forma de evoluirmos é Partilhando ideia.
 * Qualquer sugestão é bem Vinda.
 * Eis a minha contribuição.
 */
$(document).ready(function(){

    var DIRPAGE="http://"+document.location.hostname+"/";

    //Lista de todos os Usuarios Cadastrados
    $('#Usuarios').one('click',function(event){
       event.preventDefault();
       
       var Dados;

       $.ajax({
            url:DIRPAGE+'cadastro/seleciona',
            dataType:'html',
            data:Dados,
            success:function(Dados){
                $('.Formulario').html(Dados);
            }
       });
    });
        //Lista de Todas as reservas feitas
    $('#Reservas').one('click',function(event){

        event.preventDefault();
        var Dados=$(this).serialize();
 
        $.ajax({
             url:DIRPAGE+'reserva/seleciona',
             dataType:'html',
             data:Dados,
             success:function(Dados){
                 $('.Formulario').html(Dados);
             }
        });
     });

});
$("#fecharModal").click(function(){
    $(".sucessodepoimento").hide();
});