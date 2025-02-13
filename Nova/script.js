document.addEventListener("DOMContentLoaded", () => {
    const carousel = document.querySelector(".carousel-inner");
    const items = document.querySelectorAll(".carousel-item");
    const totalItems = items.length;
    
    let angle = 0;
    const angleStep = 360 / totalItems;
    let autoRotate;

    function rotateCarousel(direction = 1) {
        angle -= angleStep * direction;
        carousel.style.transform = `rotateY(${angle}deg)`;
    }

    function startAutoRotate() {
        autoRotate = setInterval(() => rotateCarousel(1), 3000);
    }

    function stopAutoRotate() {
        clearInterval(autoRotate);
    }

    // Iniciar rotación automática
    startAutoRotate();

    // Botones de navegación
    document.getElementById("prev").addEventListener("click", () => {
        stopAutoRotate();
        rotateCarousel(-1);
        startAutoRotate();
    });

    document.getElementById("next").addEventListener("click", () => {
        stopAutoRotate();
        rotateCarousel(1);
        startAutoRotate();
    });
});