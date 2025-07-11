// Função para ativar os botões "Apagar" que removem a linha da tabela
export function ativarBotaoApagar() {
    document.querySelectorAll('.apagarDados').forEach(botao => {
        botao.addEventListener('click', () => {
            const linha = botao.closest('tr');
            linha.remove();
        });
    });
}

export function ativarBotaoAlterar(callbackAlterar) {
    document.querySelectorAll('.alterarDados').forEach(botao => {
        botao.addEventListener('click', () => {
            const linha = botao.closest('tr');
            if (typeof callbackAlterar === 'function') {
                callbackAlterar(linha);
            }
        });
    });
}


