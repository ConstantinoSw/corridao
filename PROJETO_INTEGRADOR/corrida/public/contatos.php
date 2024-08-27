<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
        .carousel {
            position: relative;
            width: 80%;
            margin: auto;
            overflow: hidden;
            border: 2px solid #ddd;
            border-radius: 10px;
        }
        .carousel-inner {
            display: flex;
            transition: transform 0.5s ease;
        }
        .carousel-item {
            min-width: 100%;
            box-sizing: border-box;
        }
        .carousel img {
            width: 100%;
            border-bottom: 2px solid #ddd;
        }
        .carousel-control {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }
        .carousel-control button {
            background-color: rgba(0, 0, 0, 0.5);
            border: none;
            color: white;
            padding: 10px;
            cursor: pointer;
            border-radius: 50%;
        }
        .carousel-control button:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }
    </style>
</head>
<body>
    <div class="carousel">
        <div class="carousel-inner">
            <div class="carousel-item"><img src="corridao.jpg" alt="Imagem 1"></div>
            <div class="carousel-item"><img src="https://via.placeholder.com/800x400?text=Imagem+2" alt="Imagem 2"></div>
            <div class="carousel-item"><img src="https://via.placeholder.com/800x400?text=Imagem+3" alt="Imagem 3"></div>
        </div>
        <div class="carousel-control">
            <button id="prev">&#10094;</button>
            <button id="next">&#10095;</button>
        </div>
    </div>

    <script>
        const prevButton = document.getElementById('prev');
        const nextButton = document.getElementById('next');
        const carouselInner = document.querySelector('.carousel-inner');
        let index = 0;

        function updateCarousel() {
            const totalItems = document.querySelectorAll('.carousel-item').length;
            const offset = -index * 100;
            carouselInner.style.transform = `translateX(${offset}%)`;
        }

        prevButton.addEventListener('click', () => {
            index = (index > 0) ? index - 1 : 2;
            updateCarousel();
        });

        nextButton.addEventListener('click', () => {
            index = (index < 2) ? index + 1 : 0;
            updateCarousel();
        });

        // Initialize carousel position
        updateCarousel();
    </script>
<div class="container">
        <header>
            <h1>CALISTENIA PARA kkkkk</h1>
        </header>
        <section class="content">
           
            <h2>Transforme seu corpo e sua mente com o nosso curso calistenia para iniciante: alcance força, flexibilidade e equilíbrio sem precisar de equipamentos caros. Inscreva-se hoje e comece a sua jornada para um estilo de vida mais saudável e ativo!</p>
            
    </div>
          
    </div> 
    <div class="container">
        <header>
            <h1>TREINAMENTO DE 30 DIAS PARA O TAF</h1>
        </header>
        <section class="content">
            <h2>Introdução</h2>
            <p>Este é um exemplo de como criar um container para um tutorial em HTML e CSS.</p>
            
            
    </div>               
</body>
</html>