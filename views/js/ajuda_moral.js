const modalMoral = document.getElementById('modalMoral');
const idViolencia = document.getElementById('idViolencia');
const nomeUser = document.getElementById('nomeUser');
const difamado = document.getElementById('difamado');
const afetou_imagem = document.getElementById('afetou_imagem');
const agressor = document.getElementById('agressor');
const perseguido = document.getElementById('perseguido');
const procurou_ajuda = document.getElementById('procurou_ajuda');
const continua = document.getElementById('continua');
const date = document.getElementById('date');
const horario = document.getElementById('horario');

// Função para abrir o modal e carregar os dados via AJAX
function abrirModalMoral(id_moral) {
    fetch('../../../../logica/controllers/ControllerAjuda.php?id_moral=' + id_moral)
        .then(response => response.json())
        .then(data => {
            // Preencher os detalhes da ajuda no modal
            idViolencia.textContent = data.id_violencia;
            nomeUser.textContent = data.nome;
            difamado.textContent = data.difamado;
            afetou_imagem.textContent = data.afetou_imagem;
            agressor.textContent = data.agressor;
            perseguido.textContent = data.perseguido;
            procurou_ajuda.textContent = data.procurou_ajuda;
            continua.textContent = data.continua;
            date.textContent = data.data;
            horario.textContent = data.horario;
            
            // Mostrar o modal
            modalMoral.style.display = 'flex';
        })
        .catch(error => {
            console.error('Erro ao buscar os detalhes:', error);
        });
}

// Função para fechar o modal
function fecharModal() {
    modalMoral.style.display = 'none';
}

// Fechar o modal ao clicar fora dele
window.onclick = function(event) {
    if (event.target == modalMoral) {  // Corrigido para modalDigital
        fecharModal();
    }
}


