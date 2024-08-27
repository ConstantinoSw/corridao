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

$(document).ready(function(){
    $("#myBtn").click(function(){
      $("#myModal").modal();
    });
  });

  document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelector('.slides');
    const slideCount = document.querySelectorAll('.slide').length;
    const prevButton = document.querySelector('.prev');
    const nextButton = document.querySelector('.next');
    let currentIndex = 0;

    function showSlide(index) {
        if (index >= slideCount) {
            currentIndex = 0;
        } else if (index < 0) {
            currentIndex = slideCount - 1;
        } else {
            currentIndex = index;
        }
        const offset = -currentIndex * 100;
        slides.style.transform = `translateX(${offset}%)`;
    }

    prevButton.addEventListener('click', () => showSlide(currentIndex - 1));
    nextButton.addEventListener('click', () => showSlide(currentIndex + 1));

    showSlide(currentIndex);
});