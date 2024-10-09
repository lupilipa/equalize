const modalFisica = document.getElementById('modalFisica');
const idViolencia = document.getElementById('idViolencia');
const nomeUser = document.getElementById('nomeUser');
const agressoes = document.getElementById('agressoes');
const frequencia = document.getElementById('frequencia');
const atend_medico = document.getElementById('atend_medico');
const agressor = document.getElementById('agressor');
const relatado = document.getElementById('relatado');
const seguranca = document.getElementById('seguranca');
const date = document.getElementById('date');
const horario = document.getElementById('horario');

// Função para abrir o modal e carregar os dados via AJAX
function abrirModalFisica(id_fisica) {
    fetch('../../../../logica/controllers/ControllerAjuda.php?id_fisica=' + id_fisica)
        .then(response => response.json())
        .then(data => {
            // Preencher os detalhes da ajuda no modal
            idViolencia.textContent = data.id_violencia;
            nomeUser.textContent = data.nome;
            agressoes.textContent = data.agressoes;
            frequencia.textContent = data.frequencia;
            atend_medico.textContent = data.atend_medico;
            agressor.textContent = data.agressor;
            relatado.textContent = data.relatado;
            seguranca.textContent = data.seguranca;
            date.textContent = data.data;
            horario.textContent = data.horario;
            
            // Mostrar o modal
            modalFisica.style.display = 'flex';
        })
        .catch(error => {
            console.error('Erro ao buscar os detalhes:', error);
        });
}

// Função para fechar o modal
function fecharModal() {
    modalFisica.style.display = 'none';
}

// Fechar o modal ao clicar fora dele
window.onclick = function(event) {
    if (event.target == modalFisica) {  // Corrigido para modalDigital
        fecharModal();
    }
}


