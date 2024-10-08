let relatoId = null;
const modalOcultar = document.getElementById('modalOcultar');
const modalMostrar = document.getElementById('modalMostrar');
const mostrarBtn = document.getElementById('mostrarRelato');
const ocultarBtn = document.getElementById('ocultarRelato');
const mostrarCancelarBtn = document.getElementById('mostrarCancelar');
const ocultarCancelarBtn = document.getElementById('ocultarCancelar');

function abrirOcultar(id_relato) {
    relatoId = id_relato;
    modalOcultar.style.display = 'flex';
}

ocultarCancelarBtn.onclick = function() {
    modalOcultar.style.display = 'none';
    relatoId = null;
};

ocultarBtn.onclick = function() {
    if (relatoId) {
        fetch('../../../logica/controllers/ControllerRelatos.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: 'id=' + relatoId
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                window.location.reload();
            } else {
                alert('Erro ao ocultar o relato');
            }
        });
    }
    modalOcultar.style.display = 'none';
};

function abrirMostrar(id_relato) {
    relatoId = id_relato;
    modalMostrar.style.display = 'flex';
}

mostrarCancelarBtn.onclick = function() {
    modalMostrar.style.display = 'none';
    relatoId = null;
};

mostrarBtn.onclick = function() {
    if (relatoId) {
        fetch('../../../logica/controllers/ControllerRelatos.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: 'id=' + relatoId
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                window.location.reload();
            } else {
                alert('Erro ao disponibilizar o relato');
            }
        });
    }
    modalMostrar.style.display = 'none';
};