// Función para cargar la página
document.addEventListener("DOMContentLoaded", function() {
    // Llama a las funciones de inicialización
    initNavigation();
    initSamples();
    initLogin();
    initCart();
    initAdmin();
});

// Función para inicializar la barra de navegación
function initNavigation() {
    const navLinks = document.querySelectorAll(".nav-links a");

    navLinks.forEach(link => {
        link.addEventListener("click", function(event) {
            // Evita que el enlace recargue la página
            event.preventDefault();

            // Obtiene el objetivo del enlace (por ejemplo, #samples)
            const targetId = link.getAttribute("href").substring(1);

            // Desplázate suavemente al elemento objetivo
            document.getElementById(targetId).scrollIntoView({
                behavior: "smooth"
            });
        });
    });
}

function initSamples() {
    // Supongamos que tienes un array de objetos que representan las muestras
}
// Función para inicializar la sección de inicio de sesión
function initLogin() {
    // Aquí puedes implementar la lógica de inicio de sesión con Google u otras plataformas
}

// Función para inicializar la sección de carrito de compras
function initCart() {
    // Aquí puedes implementar la lógica del carrito de compras
}

// Función para inicializar la sección de administrador
function initAdmin() {
    // Aquí puedes agregar la funcionalidad para que Tom Gasco pueda subir canciones
}
