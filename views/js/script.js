let relatoId = null;
const modal = document.getElementById('modal');
const confirmarBtn = document.getElementById('confirmar');
const cancelarBtn = document.getElementById('cancelar');

function abrirModal(id_relato) {
    relatoId = id_relato;
    modal.style.display = 'flex';
}

cancelarBtn.onclick = function() {
    modal.style.display = 'none';
    relatoId = null;
};

confirmarBtn.onclick = function() {
    if (relatoId) {
        fetch('../../logica/controllers/ControllerRelatos.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: 'id_relato=' + relatoId
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
    modal.style.display = 'none';
};