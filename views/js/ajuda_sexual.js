const modalSexual = document.getElementById('modalSexual');
const idViolencia = document.getElementById('idViolencia');
const nomeUser = document.getElementById('nomeUser');
const forcado = document.getElementById('forcado');
const tocado = document.getElementById('tocado');
const seguro = document.getElementById('seguro');
const agressor = document.getElementById('agressor');
const procurou_ajuda = document.getElementById('procurou_ajuda');
const medo = document.getElementById('medo');
const date = document.getElementById('date');
const horario = document.getElementById('horario');

// Função para abrir o modal e carregar os dados via AJAX
function abrirModalSexual(id_sexual) {
    fetch('../../../../logica/controllers/ControllerAjuda.php?id_sexual=' + id_sexual)
        .then(response => response.json())
        .then(data => {
            // Preencher os detalhes da ajuda no modal
            idViolencia.textContent = data.id_violencia;
            nomeUser.textContent = data.nome;
            forcado.textContent = data.forcado;
            tocado.textContent = data.tocado;
            seguro.textContent = data.seguro;
            agressor.textContent = data.agressor;
            procurou_ajuda.textContent = data.procurou_ajuda;
            medo.textContent = data.medo;
            date.textContent = data.data;
            horario.textContent = data.horario;
            
            // Mostrar o modal
            modalSexual.style.display = 'flex';
        })
        .catch(error => {
            console.error('Erro ao buscar os detalhes:', error);
        });
}

// Função para fechar o modal
function fecharModal() {
    modalSexual.style.display = 'none';
}

// Fechar o modal ao clicar fora dele
window.onclick = function(event) {
    if (event.target == modalSexual) {  // Corrigido para modalDigital
        fecharModal();
    }
}


