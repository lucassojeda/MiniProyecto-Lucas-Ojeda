console.log('Script cargado');

// Función para abrir/cerrar el menú
function toggleMenu() {
    document.body.classList.toggle('menu-open');
}

// Contador de visitas
let contadorVisitas = document.getElementById('contadorVisitas');
if (contadorVisitas) {
    let visitas = localStorage.getItem('visitas');
    visitas = visitas ? parseInt(visitas) + 1 : 1;
    contadorVisitas.textContent = visitas;
    localStorage.setItem('visitas', visitas);
}

// Envío del formulario
const formulario = document.querySelector('#subscription-form');
if (formulario) {
    formulario.addEventListener('submit', (event) => {
        event.preventDefault();
        alert('¡Gracias por suscribirte!');
    });
}
