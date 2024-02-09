// Bloquear el scroll
function bloquearScroll() {
    // Calcula el ancho de la barra de desplazamiento para evitar el reajuste del diseño
    var scrollBarWidth = window.innerWidth - document.documentElement.clientWidth;

    // Guarda el ancho actual del cuerpo para mantenerlo fijo
    var bodyWidth = document.body.clientWidth;
    document.body.style.paddingRight = scrollBarWidth + 'px';
    document.body.style.overflow = 'hidden';
    document.body.style.position = 'fixed';
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
    if (document.getElementById('user').value == 'user' && document.getElementById('pass').value == 'user') {
        localStorage.setItem('user', document.getElementById('user').value);
        localStorage.setItem('pass', document.getElementById('pass').value);
        window.location.href = 'pages/juegos.html';
    } else {
        alert('Usuario o contraseña incorrectos');
    }

});

// funcion para cambiar el background de un elemento de una lista de colores que se selecciona aleatoriamente
function changeColor(id) {
    var colors = ['#38725b', '#4b5dab', '#a4587b', '#d8b24a', '#826dbf', '#d8805e', '#4e9791', '#8c8c8c', '#e0a48f', '#81b7cf'];
    var randomColor = colors[Math.floor(Math.random() * colors.length)];
    document.getElementById(id).style.backgroundColor = randomColor;
}

changeColor('conoce-bg');
changeColor('comparte-bg');
changeColor('publica-bg');

document.getElementById('conoce-bg').addEventListener('mouseover', function () {
    changeColor('conoce-bg');
});

document.getElementById('comparte-bg').addEventListener('mouseover', function () {
    changeColor('comparte-bg');
});

document.getElementById('publica-bg').addEventListener('mouseover', function () {
    changeColor('publica-bg');
});