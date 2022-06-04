function incialModal(modalID){
    const modal = document.getElementById(modalID);
    if(modal){
        modal.classList.add('mostrar');
        modal.addEventListener('click', (e) => {
            if(e.target.id == modalID || e.target.className == 'fechar' ){
                modal.classList.remove('mostrar');
            }
        });
    }  
}

const botaoPedidos = document.querySelector('.botaoPedidos');
botaoPedidos.addEventListener('click', () => incialModal('modal-inserir-pedido'));

const arrayEditarPedido = document.querySelectorAll('.editarPedido');
[...arrayEditarPedido].forEach(element => {
    element.addEventListener('click', () => incialModal('modal-editar-pedido'));
});

const arrayExcluirPedido = document.querySelectorAll('.excluirPedido');
[...arrayExcluirPedido].forEach(element => {
    element.addEventListener('click', () => incialModal('modal-excluir-pedido'));
});

const arrayVisualizarPedido = document.querySelectorAll('.visualizarPedido');
[...arrayVisualizarPedido].forEach(element => {
    element.addEventListener('click', () => incialModal('modal-visualizar-pedido'));
});