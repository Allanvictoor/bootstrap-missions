//Eu defini todos os Id's dos inputs da foma mais simples o possivel
$(document).ready(function mascaras(){
    $('#nome').mask('AAAAAAAA', {reverse:true});
    $('#cpf').mask('999.999.999', {reverse:true});
    $('#rg').mask('99.999.', {reverse:true});
    $('#cep').mask('00000-000',{reverse:true});
    $('#numero').mask('00000',{reverse:true});
    $('#uf').mask('AA',{reverse:true});
    $('#dd').mask('00',{reverse:true});
    $('#telefone').mask('00000-0000',{reverse:true});

    
});

function countChar(val){
    var len = val.value.length;
    if (len >= 500) {
             val.value = val.value.substring(0, 500);
    } else {
             $('#charNum').text(500 - len);
    }
};

$(document).ready(function (){
    $('#pessoais, #informacionais, #mensageiro').submit(function enviar(event){
        alert("Seus dados foram enviados");
        event.prevent.Default();
            $('#nome').each(function limpar(){
                this.reset();
            });
            $('#pessoais, #informacinais, #mensageiro').validate();
        });
});