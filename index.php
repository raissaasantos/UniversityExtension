<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/style.css">  
    <title>Assembléia de Deus Ministério O Atalaia</title>
    <style>
/* Slideshow container */
.slideshow-container {
    position: relative;
    max-width: 100%;
    margin: auto;
    overflow: hidden;
}

/* Hide the images by default */
.slide {
    display: none;
}

/* Fade animation */
.fade {
    animation-name: fade;
    animation-duration: 1.5s;
}

@keyframes fade {
    from {opacity: .4} 
    to {opacity: 1}
}

/* Next & previous buttons */
.prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -22px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
}

.prev {
    left: 0;
    border-radius: 3px 0 0 3px;
}

.next {
    right: 0;
    border-radius: 0 3px 3px 0;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
    background-color: rgba(0,0,0,0.8);
}

/* Dots/bullets/indicators */
.dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
}

.active, .dot:hover {
    background-color: #717171;
}

/* Responsive */
@media only screen and (max-width: 600px) {
    .prev, .next {
        font-size: 11px;
        padding: 10px;
    }
}


    </style>
</head>
<body>
    <nav class="nav_logo">
        <img src="img/logo.png" alt="Assembléia de Deus Ministério O Atalaia" width="60">
        Assembléia de Deus Ministério O Atalaia
        <a href="pages/login.php">Login</a>
    </nav>
    <hr>
    <div class="slideshow-container">
        <div class="slide fade">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPi8VC3ZHL80gd9eHVio4FX8qdY49hHI3_2_rYblOkMA&s" style="width:100%; height:400px; object-fit:cover;">
        </div>
        <div class="slide fade">
            <img src="https://t2.tudocdn.net/636236?w=824&h=494" style="width:100%; height:400px; object-fit:cover;">
        </div>
        <div class="slide fade">
            <img src="https://img.odcdn.com.br/wp-content/uploads/2023/07/Google-e1690308582765.jpg" style="width:100%; height:400px; object-fit:cover;">
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <main>
        <h1>Sobre nós</h1>
        <p>
            A nossa igreja foi iniciada com o intuito de ajudar dependentes químicos, nasceu de um projeto social de recuperação e recolocação desta pessoas em ambientes de trabalho. Além deste trabalhos social ajudamos pessoas em situação de rua ou extrema pobreza. Esses serviços incluem entrega de marmitas para pessoas em situação de rua ou montagem de cestas básicas para famílias que não tem condições financeiras de se manter sozinhas. Através destas trabalhos famílias tem se rendido aos pés da cruz e aceitado Jesus com único e suficiente salvador. Este tem sido o nosso propósito a 11 anos!
        </p>

        <h1>Ação Social</h1>
        <p>
            Foi iniciada em 2013 junto a fundação da nossa igreja. Atualmente, é feita pelo menos duas vezes ao mês, isso inclui entrega de marmitas para pessoas em situação de rua e cestas básicas para pessoas necessitadas.
        </p>
    </main>
    <hr>
    <footer>
        <h1>Onde nos encontrar</h1>
        <address>
            Estrada do Morro Grande, 1270 - Jardim Ísis (sede) <br>
            Rua da Paz, 76 - Jardim Cotia <br>
            Rua Urca, 537 - Parque do Agreste
        </address>

        <div class="nav_contact">
            <div class="nav_contact_num">
                <span><i class="ri-phone-line"></i></span>
                <div>
                    <p>Entre em contato</p>
                    <h4>(11) 995357506</h4>
                    <h4>(11) 997361270</h4>
                    <a href="https://www.instagram.com/m_oatalaia" target="_blank"><i class="ri-instagram-line"></i> @m_oatalaia</a>
                </div>
            </div>
        </div>
    </footer>
    <script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("slide");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
    }

    setInterval(function() {
        plusSlides(1);
    }, 4000); // Change image every 4 seconds
    </script>
</body>
</html>
