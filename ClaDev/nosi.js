// Función para mostrar una alerta
function alerta() {
    alert("Se han guardado tus datos correctamente");
}

// Función para cambiar el texto del botón
function cambiar() {
    document.getElementById("guardarBTN").innerHTML = "Datos guardados";
}

// Asignar evento al botón "Guardar"
document.getElementById("guardarBTN").onclick = function () {
    alerta(); // Mostrar alerta
    cambiar(); // Cambiar el texto del botón
};

// Asignar evento al botón "Ir a otra página"
document.getElementById("miBoton").addEventListener("click", function () {
    // Redirigir a otro archivo HTML
    window.location.href = "si.html";
});