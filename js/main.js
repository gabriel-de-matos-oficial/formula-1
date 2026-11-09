document.addEventListener("DOMContentLoaded", function () {
    const botao = document.getElementById("botao-clique");

    if (botao) {
        botao.addEventListener("click", function () {
            alert("Bem vindo ao universo da Fórmula 1!");
        });
    }

    const formulario = document.querySelector("form");

    if (formulario) {
        formulario.addEventListener("submit", function () {
            alert("Compra realizada com sucesso!");
        });
    }
});