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

let currentIndex = 0;
const items = document.querySelectorAll('.carousel-item');
const totalItems = items.length;

function moveToNextSlide() {
  currentIndex = (currentIndex + 1) % totalItems;
  items.forEach((item, index) => {
    item.style.transform = `translateX(-${currentIndex * 100}%)`;
  });
}

setInterval(moveToNextSlide, 3000);
