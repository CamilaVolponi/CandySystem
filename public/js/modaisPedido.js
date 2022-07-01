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

const arrayExcluirPedido = document.querySelectorAll('.excluirPedido');
[...arrayExcluirPedido].forEach(element => {
    element.addEventListener('click', () => incialModal('modal-excluir-pedido'));
});

const arrayExcluirProdutoPedido = document.querySelectorAll('.ExcluirProdutoPedido');
[...arrayExcluirProdutoPedido].forEach(element => {
    element.addEventListener('click', () => incialModal('modal-excluir-produto-pedido'));
});

const arrayEditarProdutoPedido = document.querySelectorAll('.EditarProdutoPedido');
[...arrayEditarProdutoPedido].forEach(element => {
    element.addEventListener('click', () => incialModal('modal-editar-produto-pedido'));
});
