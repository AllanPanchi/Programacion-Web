// Bloquear el scroll
function bloquearScroll() {
    // Calcula el ancho de la barra de desplazamiento para evitar el reajuste del diseño
    var scrollBarWidth = window.innerWidth - document.documentElement.clientWidth;

    // Guarda el ancho actual del cuerpo para mantenerlo fijo
    var bodyWidth = document.body.clientWidth;
    document.body.style.paddingRight = scrollBarWidth + 'px';
    document.body.style.overflow = 'hidden';
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

// funcion para cambiar el background de un elemento de una lista de colores que se selecciona aleatoriamente
function changeColor(id) {
    var colors = ['#38725b', '#4b5dab', '#a4587b', '#d8b24a', '#826dbf', '#d8805e', '#4e9791', '#8c8c8c', '#e0a48f', '#81b7cf'];
    var randomColor = colors[Math.floor(Math.random() * colors.length)];
    document.getElementById(id).style.backgroundColor = randomColor;
}

export function setListeners() {

    document.getElementById('to-registro').addEventListener('click', () => {
        var elements = document.getElementsByClassName('registroHide');
        var elements2 = document.getElementsByClassName('logInHide');
        for (var i = 0; i < elements2.length; i++) {
            elements2[i].style.display = 'none';
        }
        for (var i = 0; i < elements.length; i++) {
            elements[i].style.display = 'flex';
        }
    });

    document.getElementById('to-login').addEventListener('click', () => {
        var elements = document.getElementsByClassName('logInHide');
        var elements2 = document.getElementsByClassName('registroHide');
        for (var i = 0; i < elements2.length; i++) {
            elements2[i].style.display = 'none';
        }
        for (var i = 0; i < elements.length; i++) {
            elements[i].style.display = 'flex';
        }
    });

    document.getElementById('btn-registro').addEventListener('click', () => {
        var elements = document.getElementsByClassName('registroHide');
        for (var i = 0; i < elements.length; i++) {
            if (elements[i].style.display == 'flex') {
                elements[i].style.display = 'none';
                desbloquearScroll();
                console.log('salir');
            } else {
                elements[i].style.display = 'flex';
                bloquearScroll();
                console.log('entrar');
            }
        }
    });

    document.getElementById('btn-close-registro').addEventListener('click', () => {
        var elements = document.getElementsByClassName('registroHide');
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

    document.getElementById('btn-logIn').addEventListener('click', () => {
        var elements = document.getElementsByClassName('logInHide');
        for (var i = 0; i < elements.length; i++) {
            if (elements[i].style.display == 'flex') {
                elements[i].style.display = 'none';
                desbloquearScroll();
                console.log('salir');
            } else {
                elements[i].style.display = 'flex';
                bloquearScroll();
                console.log('entrar');
            }
        }
    });

    document.getElementById('btn-close-logIn').addEventListener('click', () => {
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
            window.location.href = 'http://localhost:3000/resena';
        } else {
            alert('Usuario o contraseña incorrectos');
            document.getElementById('user').value = '';
            document.getElementById('pass').value = '';
        }

    });

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
}
