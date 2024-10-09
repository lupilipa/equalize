const modalFinanceira = document.getElementById('modalFinanceira');
const idViolencia = document.getElementById('idViolencia');
const nomeUser = document.getElementById('nomeUser');
const controle = document.getElementById('controle');
const impedido = document.getElementById('impedido');
const acesso = document.getElementById('acesso');
const controlador = document.getElementById('controlador');
const coagido = document.getElementById('coagido');
const procurou_ajuda = document.getElementById('procurou_ajuda');
const date = document.getElementById('date');
const horario = document.getElementById('horario');

// Função para abrir o modal e carregar os dados via AJAX
function abrirModalFinanceira(id_financeira) {
    fetch('../../../../logica/controllers/ControllerAjuda.php?id_financeira=' + id_financeira)
        .then(response => response.json())
        .then(data => {
            // Preencher os detalhes da ajuda no modal
            idViolencia.textContent = data.id_violencia;
            nomeUser.textContent = data.nome;
            controle.textContent = data.controle;
            impedido.textContent = data.impedido;
            acesso.textContent = data.acesso;
            controlador.textContent = data.controlador;
            coagido.textContent = data.coagido;
            procurou_ajuda.textContent = data.procurou_ajuda;
            date.textContent = data.data;
            horario.textContent = data.horario;
            
            // Mostrar o modal
            modalFinanceira.style.display = 'flex';
        })
        .catch(error => {
            console.error('Erro ao buscar os detalhes:', error);
        });
}

// Função para fechar o modal
function fecharModal() {
    modalFinanceira.style.display = 'none';
}

// Fechar o modal ao clicar fora dele
window.onclick = function(event) {
    if (event.target == modalFinanceira) {  // Corrigido para modalDigital
        fecharModal();
    }
}


