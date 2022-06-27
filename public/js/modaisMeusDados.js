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

const arrayExcluirFuncionario = document.querySelectorAll('.excluirFuncionario');
[...arrayExcluirFuncionario].forEach(element => {
    element.addEventListener('click', () => incialModal('modal-excluir-funcionario'));
});
