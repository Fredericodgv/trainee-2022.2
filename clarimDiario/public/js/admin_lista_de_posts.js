function iniciaModal(modalID) {
    const modal = document.getElementById(modalID);  
    modal.classList.add('mostrar');   
    modal.addEventListener('click', (e) => {
        
        if(e.target.id == modalID || e.target.className == 'sair-botao') {
            modal.classList.remove('mostrar');
        }
    
    });

}

    const add = document.querySelector('.adicionar-button'); //capta o botao de adicionar
    add.addEventListener('click', function()  {
        iniciaModal('modal-add');
    }); //atribui o modal de adicionar ao botão de adicionar

    const del = document.querySelector('.aux-button-table-delete'); //capta o botao de deletar
    del.addEventListener('click', function()  {
        iniciaModal('modal-del');
    }); //atribui o modal de deletar ao botão de deletar

    const editar = document.querySelector('.aux-button-table'); //capta o botao de editar
    editar.addEventListener('click', function()  {
        iniciaModal('modal-edit');
    }); //atribui o modal de editar ao botão de editar
    
    const visualizar = document.querySelector('.aux-button-table-1'); //capta o botão de visualizar 
    visualizar.addEventListener('click', function()  {
        iniciaModal('modal-view');
    }); //atribui o modal de visualizar ao botão de visualizar

    //////////////////////////////////////////////////////////////////////////////////////
    
    const modal = document.getElementById("modal");
    const botoes = document.getElementsByClassName("botao"); //peguei todos os botões (dos 3 tipos excl, edit e view) da página

    const botoesModal = [...botoes].filter((el) => {
        return el.dataset.modal != null;
    }); //filtrando todos os botoes p pegar os abertos

    [...botoesModal, modal].forEach((el) => { 
        el.addEventListener("click", () => iniciaModal(el.dataset.modal))  
    });