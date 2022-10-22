function iniciaModal(modalID) {
    const modal = document.getElementById(modalID);  
    modal.classList.add('mostrar');   
    modal.addEventListener('click', (e) => {
        
        if(e.target.id == modalID || e.target.className == 'sair-botao') {
            modal.classList.remove('mostrar');
        }
    
    });

}

    const add = document.querySelector('.adicionar-button');
    add.addEventListener('click', function()  {
        iniciaModal('modal-add');
    });

    const del = document.querySelector('.aux-button-table-delete');
    del.addEventListener('click', function()  {
        iniciaModal('modal-del');
    });

    const editar = document.querySelector('.aux-button-table');
    editar.addEventListener('click', function()  {
        iniciaModal('modal-edit');
    });
    
    const visualizar = document.querySelector('.aux-button-table-1');
    visualizar.addEventListener('click', function()  {
        iniciaModal('modal-view');
    });

    