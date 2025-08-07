document.addEventListener('DOMContentLoaded', () => {
    const botao = document.getElementById('btnSurpresa');
    const imagem = document.getElementById('imagem-surpresa');

    botao.addEventListener('click', () => {
        imagem.style.width = "400px";

        imagem.addEventListener('transitionend', () => {
            setTimeout(() => {
                imagem.src = "assets/scout-rotation.gif";
            }, 1000);

            setTimeout(() => {
                imagem.src = "assets/scout-finger.gif";
            }, 11500);
        }, { once: true }); // evita múltiplas execuções
    });
});
