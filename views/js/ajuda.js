const modalDigital = document.getElementById('modalDigital');
const idViolencia = document.getElementById('idViolencia');
const nomeUser = document.getElementById('nomeUser');
const vitima = document.getElementById('vitima');
const frequencia = document.getElementById('frequencia');
const agressor = document.getElementById('agressor');
const inseguro = document.getElementById('inseguro');
const jaDenunciou = document.getElementById('jaDenunciou');
const protegido = document.getElementById('protegido');
const date = document.getElementById('date');
const horario = document.getElementById('horario');

// Função para abrir o modal e carregar os dados via AJAX
function abrirModalDigital(id_digital) {
    fetch('../../../../logica/controllers/ControllerAjuda.php?id_digital=' + id_digital)
        .then(response => response.json())
        .then(data => {
            // Preencher os detalhes da ajuda no modal
            idViolencia.textContent = data.id_violencia;
            nomeUser.textContent = data.nome;
            vitima.textContent = data.vitima;
            frequencia.textContent = data.frequencia;
            agressor.textContent = data.agressor;
            inseguro.textContent = data.inseguro;
            jaDenunciou.textContent = data.ja_denunciou;
            protegido.textContent = data.protegido;
            date.textContent = data.data;
            horario.textContent = data.horario;
            
            // Mostrar o modal
            modalDigital.style.display = 'flex';
        })
        .catch(error => {
            console.error('Erro ao buscar os detalhes:', error);
        });
}

// Função para fechar o modal
function fecharModal() {
    modalDigital.style.display = 'none';
}

// Fechar o modal ao clicar fora dele
window.onclick = function(event) {
    if (event.target == modalDigital) {  // Corrigido para modalDigital
        fecharModal();
    }
}


