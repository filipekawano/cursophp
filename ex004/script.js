var botao_enviar = window.document.querySelector('input.botao_enviar')

function entrar() {
    botao_enviar.style.boxShadow = "inset 1.5px 1.5px 1px rgba(0, 0, 0, 0.49)"
    botao_enviar.style.transform = "translate(0.5%, 1.25%)"
}

function sair() {
    botao_enviar.style.boxShadow = "none"
    botao_enviar.style.transform = "translate(-0.5%, -1.25%)"
}
