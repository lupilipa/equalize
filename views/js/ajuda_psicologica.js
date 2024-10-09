const modalPsicologica = document.getElementById('modalPsicologica');
const idViolencia = document.getElementById('idViolencia');
const nomeUser = document.getElementById('nomeUser');
const manipulado = document.getElementById('manipulado');
const isolado = document.getElementById('isolado');
const ameacado = document.getElementById('ameacado');
const agressor = document.getElementById('agressor');
const depressao = document.getElementById('depressao');
const procurou_ajuda = document.getElementById('procurou_ajuda');
const date = document.getElementById('date');
const horario = document.getElementById('horario');

// Função para abrir o modal e carregar os dados via AJAX
function abrirModalPsicologica(id_psicologica) {
    fetch('../../../../logica/controllers/ControllerAjuda.php?id_psicologica=' + id_psicologica)
        .then(response => response.json())
        .then(data => {
            // Preencher os detalhes da ajuda no modal
            idViolencia.textContent = data.id_violencia;
            nomeUser.textContent = data.nome;
            manipulado.textContent = data.manipulado;
            isolado.textContent = data.isolado;
            ameacado.textContent = data.ameacado;
            agressor.textContent = data.agressor;
            depressao.textContent = data.depressao;
            procurou_ajuda.textContent = data.procurou_ajuda;
            date.textContent = data.data;
            horario.textContent = data.horario;
            
            // Mostrar o modal
            modalPsicologica.style.display = 'flex';
        })
        .catch(error => {
            console.error('Erro ao buscar os detalhes:', error);
        });
}

// Função para fechar o modal
function fecharModal() {
    modalPsicologica.style.display = 'none';
}

// Fechar o modal ao clicar fora dele
window.onclick = function(event) {
    if (event.target == modalPsicologica) {  // Corrigido para modalDigital
        fecharModal();
    }
}


