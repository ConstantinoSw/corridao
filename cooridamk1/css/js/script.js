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
