const modalInstitucional = document.getElementById('modalInstitucional');
const idViolencia = document.getElementById('idViolencia');
const nomeUser = document.getElementById('nomeUser');
const discriminado = document.getElementById('discriminado');
const instituicao = document.getElementById('instituicao');
const negligenciado = document.getElementById('negligenciado');
const ja_denunciou = document.getElementById('ja_denunciou');
const afetou_acesso = document.getElementById('afetou_acesso');
const confianca = document.getElementById('confianca');
const date = document.getElementById('date');
const horario = document.getElementById('horario');

// Função para abrir o modal e carregar os dados via AJAX
function abrirModalInstitucional(id_institucional) {
    fetch('../../../../logica/controllers/ControllerAjuda.php?id_institucional=' + id_institucional)
        .then(response => response.json())
        .then(data => {
            // Preencher os detalhes da ajuda no modal
            idViolencia.textContent = data.id_violencia;
            nomeUser.textContent = data.nome;
            discriminado.textContent = data.discriminado;
            instituicao.textContent = data.instituicao;
            negligenciado.textContent = data.negligenciado;
            ja_denunciou.textContent = data.ja_denunciou;
            afetou_acesso.textContent = data.afetou_acesso;
            confianca.textContent = data.confianca;
            date.textContent = data.data;
            horario.textContent = data.horario;
            
            // Mostrar o modal
            modalInstitucional.style.display = 'flex';
        })
        .catch(error => {
            console.error('Erro ao buscar os detalhes:', error);
        });
}

// Função para fechar o modal
function fecharModal() {
    modalInstitucional.style.display = 'none';
}

// Fechar o modal ao clicar fora dele
window.onclick = function(event) {
    if (event.target == modalInstitucional) {  // Corrigido para modalDigital
        fecharModal();
    }
}


