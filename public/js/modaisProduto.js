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

const botaoProdutos = document.querySelector('.botaoProdutos');
botaoProdutos.addEventListener('click', () => incialModal('modal-inserir-produto'));

const arrayEditarProduto = document.querySelectorAll('.editarProduto');
[...arrayEditarProduto].forEach(element => {
    element.addEventListener('click', () => incialModal('modal-editar-produto'));
});

const arrayExcluirProduto = document.querySelectorAll('.excluirProduto');
[...arrayExcluirProduto].forEach(element => {
    element.addEventListener('click', () => incialModal('modal-excluir-produto'));
});

const arrayVisualizarProduto = document.querySelectorAll('.visualizarProduto');
[...arrayVisualizarProduto].forEach(element => {
    element.addEventListener('click', () => incialModal('modal-visualizar-produto'));
});

const arrayEditarIngrediente = document.querySelectorAll('.EditarIngrediente');
[...arrayEditarIngrediente].forEach(element => {
    element.addEventListener('click', () => incialModal('modal-editar-ingrediente'));
});

const arrayExcluirIngrediente = document.querySelectorAll('.ExcluirIngrediente');
[...arrayExcluirIngrediente].forEach(element => {
    element.addEventListener('click', () => incialModal('modal-excluir-ingrediente'));
});

const arrayEditarPasso = document.querySelectorAll('.EditarPasso');
[...arrayEditarPasso].forEach(element => {
    element.addEventListener('click', () => incialModal('modal-editar-passo'));
});

const arrayExcluirPasso = document.querySelectorAll('.ExcluirPasso');
[...arrayExcluirPasso].forEach(element => {
    element.addEventListener('click', () => incialModal('modal-excluir-passo'));
});
