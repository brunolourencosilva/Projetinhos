export function AdicionarEvento(botaoId, funcao) {
  const botao = document.getElementById(botaoId);
  botao.addEventListener('click', funcao);
}
