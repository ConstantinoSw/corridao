<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/public/css/carro.cs">
</head>
<body>
<div class="carrossel">
        <div class="slides">
            <?php
            $imageDir = 'images/';
            $images = glob($imageDir . '*.{jpg,png,gif}', GLOB_BRACE);

            foreach ($images as $image) {
                echo '<div class="slide">';
                echo '<img src="' . $image . '" alt="Carrossel">';
                echo '</div>';
            }
            ?>
        </div>
        <button class="prev">❮</button>
        <button class="next">❯</button>
    </div>
    <script src="script.js"></script>
</body>
</html>