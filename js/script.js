$(document).ready(function(){

    function limpa_formulário_cep() {
        $("#rua").val("");
        $("#bairro").val("");
        $("#cidade").val("");
        $("#uf").val("");
        $("#ibge").val("");
    }

    function criar_alerta(){
        alert("Criei um alerta");
    }

    function busca_cep(){
        $("#demo").hide();
        let cep = $("#cep").val().replace(/\D/g, '');
        if( cep != "" ){
            let validacep = /^[0-9]{8}$/;
            if(validacep.test(cep)) {
                $("#rua").val("...");
                $("#bairro").val("...");
                $("#cidade").val("...");
                $("#uf").val("...");
                $("#ibge").val("...");

                $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        $("#rua").val(dados.logradouro);
                        $("#bairro").val(dados.bairro);
                        $("#cidade").val(dados.localidade);
                        $("#uf").val(dados.uf);
                        $("#ibge").val(dados.ibge);
                        $("#gravar").show();
                    }
                    else {
                        limpa_formulário_cep();
                        erro_cep('CEP não encontrado');
                    }
                });
            }
            else {
                limpa_formulário_cep();
                erro_cep('Formato de CEP incorreto');
            }
        }else{
            limpa_formulário_cep();
            $("#cep-border").addClass("border border-danger rounded");
            $("#cep").on('blur', ()=>$("#cep-border").removeClass("border border-danger rounded"));
        }

    }

    function erro_cep(e){
        $("#demo").show().html('<div class="alert alert-danger" role="alert">'+e+'</div>');
        setTimeout( ()=>$("#demo").fadeOut() , 2000);
    }

    $("#alerta").on('click', busca_cep)


});