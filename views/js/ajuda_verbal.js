const modalVerbal = document.getElementById('modalVerbal');
const idViolencia = document.getElementById('idViolencia');
const nomeUser = document.getElementById('nomeUser');
const xingado = document.getElementById('xingado');
const frequencia = document.getElementById('frequencia');
const agressor = document.getElementById('agressor');
const afeta_saude = document.getElementById('afeta_saude');
const ja_pediu = document.getElementById('ja_pediu');
const ja_conversou = document.getElementById('ja_conversou');
const date = document.getElementById('date');
const horario = document.getElementById('horario');

// Função para abrir o modal e carregar os dados via AJAX
function abrirModalVerbal(id_verbal) {
    fetch('../../../../logica/controllers/ControllerAjuda.php?id_verbal=' + id_verbal)
        .then(response => response.json())
        .then(data => {
            // Preencher os detalhes da ajuda no modal
            idViolencia.textContent = data.id_violencia;
            nomeUser.textContent = data.nome;
            xingado.textContent = data.xingado;
            frequencia.textContent = data.frequencia;
            agressor.textContent = data.agressor;
            afeta_saude.textContent = data.afeta_saude;
            ja_pediu.textContent = data.ja_pediu;
            ja_conversou.textContent = data.ja_conversou;
            date.textContent = data.data;
            horario.textContent = data.horario;
            
            // Mostrar o modal
            modalVerbal.style.display = 'flex';
        })
        .catch(error => {
            console.error('Erro ao buscar os detalhes:', error);
        });
}

// Função para fechar o modal
function fecharModal() {
    modalVerbal.style.display = 'none';
}

// Fechar o modal ao clicar fora dele
window.onclick = function(event) {
    if (event.target == modalVerbal) {  // Corrigido para modalDigital
        fecharModal();
    }
}


