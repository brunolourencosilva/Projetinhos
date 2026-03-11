document.addEventListener("DOMContentLoaded", () => {

    const btnComecar = document.querySelector("#btnComecar");
    const areaBotao = document.querySelector("#areaBotao");
    const form = document.querySelector("#formPersonagem");

    btnComecar.addEventListener("click", () => {

        areaBotao.style.display = "none";
        form.style.display = "block";

    });

});