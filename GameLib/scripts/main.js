// Bloquear el scroll
function bloquearScroll() {
    // Calcula el ancho de la barra de desplazamiento para evitar el reajuste del diseño
    var scrollBarWidth = window.innerWidth - document.documentElement.clientWidth;

    // Guarda el ancho actual del cuerpo para mantenerlo fijo
    var bodyWidth = document.body.clientWidth;

    // Agrega padding-right para compensar el ancho de la barra de desplazamiento
    document.body.style.paddingRight = scrollBarWidth + 'px';

    // Evita que el cuerpo se desplace
    document.body.style.overflow = 'hidden';

    // Fija el cuerpo en su posición actual
    document.body.style.position = 'fixed';

    // Ajusta el ancho del cuerpo para evitar que se ajuste al eliminar la barra de desplazamiento
    document.body.style.width = bodyWidth + 'px';
}

// Desbloquear el scroll
function desbloquearScroll() {
    // Restaura el cuerpo a su estado original
    document.body.style.paddingRight = '';
    document.body.style.overflow = '';
    document.body.style.position = '';
    document.body.style.width = '';
}

document.getElementById('btn-logIn').addEventListener('click', function () {
    var elements = document.getElementsByClassName('logInHide');
    for (var i = 0; i < elements.length; i++) {
        if (elements[i].style.display == 'flex') {
            elements[i].style.display = 'none';
            desbloquearScroll();
        } else {
            elements[i].style.display = 'flex';
            bloquearScroll();
        }
    }
});

document.getElementById('btn-close-logIn').addEventListener('click', function () {
    var elements = document.getElementsByClassName('logInHide');
    for (var i = 0; i < elements.length; i++) {
        if (elements[i].style.display == 'flex') {
            elements[i].style.display = 'none';
            desbloquearScroll();
        } else {
            elements[i].style.display = 'flex';
            bloquearScroll();
        }
    }
});

document.getElementById('form-LogIn').addEventListener('submit', function (event) {
    event.preventDefault();
    
    localStorage.setItem('user', document.getElementById('user').value);
    localStorage.setItem('pass', document.getElementById('pass').value);

    window.location.href = 'pages/juegos.html';
});