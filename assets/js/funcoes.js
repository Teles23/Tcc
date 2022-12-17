const campoSenha = document.querySelector('input[name="senha"]');
const campoConfirmarSenha = document.querySelector('input[name="confirme_senha"]');
const botao = document.querySelector('.frm-botao');
const letras = /[A-Z]/i;
const numeros = /\d+/;

campoSenha.addEventListener('input', function () {
    verificaCampos()
});

campoConfirmarSenha.addEventListener('input', function () {
    verificaCampos()
});

function verificaCampos() {
    let senhanumeros = campoSenha.value.match(numeros)
    let senhaletras = campoSenha.value.match(letras)

    if (campoSenha.value)
        if (campoSenha.value.length >= 6 && (senhanumeros && senhaletras)) {
            if (campoSenha.value == campoConfirmarSenha.value) botao.disabled = false;
            else botao.disabled = true;
        }
        else botao.disabled = true;
}
function mostrarsenha(){
    var tipo = document.getElementById("senha");
    if(tipo.type == "password"){
        tipo.type ="text";
    }else{
        tipo.type="password"
    }
    var tipo1 = document.getElementById("confirmesenha");
    if(tipo1.type == "password"){
        tipo1.type ="text";
    }else{
        tipo1.type="password"
    }
}
