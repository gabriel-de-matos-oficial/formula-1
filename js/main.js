// Este arquivo JavaScript executa quando a página termina de carregar.
document.addEventListener("DOMContentLoaded", function () {
    // Procura o botão de boas-vindas na página e o identifica pelo id "botao-clique".
    const botao = document.getElementById("botao-clique");

    // Se o botão existir, um clique dispara um alerta de boas-vindas.
    if (botao) {
        botao.addEventListener("click", function () {
            alert("Bem vindo ao universo da Fórmula 1!");
        });
    }

    // Busca o primeiro formulário da página para mostrar uma mensagem de sucesso ao enviar.
    const formulario = document.querySelector("form");

    // Se houver formulário, o evento submit exibe uma mensagem confirmando a compra.
    if (formulario) {
        formulario.addEventListener("submit", function () {
            alert("Compra realizada com sucesso!");
        });
    }
});