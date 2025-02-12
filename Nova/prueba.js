// Selecciona todos los botones con la clase "interactive-button"
const buttons = document.querySelectorAll('.interactive-button');

// Recorre cada botón y asigna un evento de clic
buttons.forEach((button) => {
  button.addEventListener('click', () => {
    // Quita la clase "active" de todos los botones
    buttons.forEach((btn) => btn.classList.remove('active'));

    // Agrega la clase "active" solo al botón clicado
    button.classList.add('active');
  });
});


// Recorre cada imagen para añadir eventos de interacción
images.forEach(image => {
  // Al pasar el mouse sobre la imagen, se muestra la descripción
  image.addEventListener("mouseenter", () => {
      const description = image.nextElementSibling; // Selecciona la descripción asociada
      description.style.opacity = "1"; // Hace visible la descripción
  });

  // Al quitar el mouse de la imagen, se oculta la descripción
  image.addEventListener("mouseleave", () => {
      const description = image.nextElementSibling;
      description.style.opacity = "0"; // Oculta la descripción
  });
});
