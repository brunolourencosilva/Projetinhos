export function botaoEvento(idbotao, funcao) {
    const botao = document.getElementById(idbotao);
    botao.addEventListener('click',funcao);
}

export function printResultado(id,print){
    const resultado = document.getElementById(id);
    if (resultado) resultado.innerHTML = print;
}