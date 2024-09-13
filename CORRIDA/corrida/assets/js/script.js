// public/js/script.js
function loadPage(page) {
    const content = document.getElementById('content');
    fetch(`public/${page}`)
        .then(response => response.text())
        .then(data => {
            content.innerHTML = data;
        })
        .catch(error => {
            content.innerHTML = '<p>Erro ao carregar a página.</p>';
        });
}

// script.js
      
      // Quando o DOM estiver totalmente carregado
      document.addEventListener('DOMContentLoaded', () => {
        // Obtém o botão e o elemento de cabeçalho pelo ID
        const button = document.getElementById('myButton');
        const header = document.getElementById('header');
    
        // Adiciona um evento de clique ao botão
        button.addEventListener('click', () => {
            // Muda o texto do elemento de cabeçalho quando o botão é clicado
            header.textContent = 'Você clicou no botão!';
        });
    });