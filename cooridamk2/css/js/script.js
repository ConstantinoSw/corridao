document.addEventListener('DOMContentLoaded', () => {
    const links = document.querySelectorAll('.nav-links a');
    const mainContent = document.getElementById('main-content');

    // Função para carregar o conteúdo de arquivos externos
    function loadContent(page) {
        fetch(`${page}.html`)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Erro ao carregar a página');
                }
                return response.text();
            })
            .then(data => {
                mainContent.innerHTML = data;
            })
            .catch(error => {
                mainContent.innerHTML = `<h1>Erro</h1><p>Não foi possível carregar o conteúdo.</p>`;
            });
    }

    // Adiciona eventos de clique nos links
    links.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const target = link.getAttribute('data-target');
            loadContent(target);
        });
    });

    // Carrega a página inicial ao carregar o site
    loadContent('home');
});

document.addEventListener('DOMContentLoaded', function() {
    const container = document.querySelector('.carrossel-container');
    const botaoEsquerda = document.querySelector('.carrossel-botao-esquerda');
    const botaoDireita = document.querySelector('.carrossel-botao-direita');
    const intervalo = 3000; // Intervalo de tempo para rotação automática (em milissegundos)

    let index = 0;
    let intervaloID;

    function atualizarCarrossel() {
        const larguraImagem = container.querySelector('img').clientWidth;
        container.style.transform = `translateX(-${index * larguraImagem}px)`;
    }

    function iniciarRotacaoAutomatica() {
        intervaloID = setInterval(() => {
            const totalImagens = container.querySelectorAll('img').length;
            index = (index < totalImagens - 1) ? index + 1 : 0;
            atualizarCarrossel();
        }, intervalo);
    }

    function pararRotacaoAutomatica() {
        clearInterval(intervaloID);
    }

    botaoEsquerda.addEventListener('click', function() {
        pararRotacaoAutomatica();
        const totalImagens = container.querySelectorAll('img').length;
        index = (index > 0) ? index - 1 : totalImagens - 1;
        atualizarCarrossel();
        iniciarRotacaoAutomatica();
    });

    botaoDireita.addEventListener('click', function() {
        pararRotacaoAutomatica();
        const totalImagens = container.querySelectorAll('img').length;
        index = (index < totalImagens - 1) ? index + 1 : 0;
        atualizarCarrossel();
        iniciarRotacaoAutomatica();
    });

    // Inicializar com a primeira imagem e começar a rotação automática
    atualizarCarrossel();
    iniciarRotacaoAutomatica();
});



