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

const inserirFuncionario = document.querySelector('.inserirFuncionario');
inserirFuncionario.addEventListener('click', () => incialModal('modal-inserir-funcionario'));

const arrayExcluirFuncionario = document.querySelectorAll('.excluirFuncionario');
[...arrayExcluirFuncionario].forEach(element => {
    element.addEventListener('click', () => incialModal('modal-excluir-funcionario'));
});

const arrayEditarFuncionario = document.querySelectorAll('.editarFuncionario');
[...arrayEditarFuncionario].forEach(element => {
    element.addEventListener('click', () => incialModal('modal-editar-funcionario'));
});

