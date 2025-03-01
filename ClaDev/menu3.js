const carruselInner = document.querySelector('.carrusel-inner');
const items = document.querySelectorAll('.carrusel-item');
const prevBtn = document.querySelector('.prev');
const nextBtn = document.querySelector('.next');
let indice = 0;

function mostrarImagen(indice) {
    const desplazamiento = -indice * 100;
    carruselInner.style.transform = `translateX(${desplazamiento}%)`;
}

prevBtn.addEventListener('click', () => {
    indice = (indice > 0) ? indice - 1 : items.length - 1;
    mostrarImagen(indice);
});

nextBtn.addEventListener('click', () => {
    indice = (indice < items.length - 1) ? indice + 1 : 0;
    mostrarImagen(indice);
});