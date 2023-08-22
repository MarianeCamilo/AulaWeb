<?php
$titulo = "Home";

include __DIR__ . '/header.php';
?>
<!-- Conteúdo principal do site -->
<main>
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/imagem1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/images/imagem2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/images/imagem3.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Bem vindos ao Meu Site Feliz</h1>
                <p>Seja bem vindo ao melhor site da américa!</p>
            </div>
            <div class="col-6">
                <p>Coluna da Direita</p>
            </div>
        </div>
    </div>
</main>

<?php
include __DIR__ . '/footer.php';
?>