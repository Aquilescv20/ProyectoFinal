// Código JavaScript para la animación del fondo (puedes usar jQuery o JavaScript puro)
$(document).ready(function () {
    const backgrounds = ['/img/Carrusel/slider_2.jpg', '/img/Carrusel/slider_3.jpg', '/img/Carrusel/slider_1.jpg'];
    let currentIndex = 0;

    function changeBackground() {
        $('body').css('background-image', `url(${backgrounds[currentIndex]})`);
        currentIndex = (currentIndex + 1) % backgrounds.length;
    }

    setInterval(changeBackground, 5000);
});
