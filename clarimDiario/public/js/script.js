const background_modal = document.getElementById("background-modal"); // CAPTA O BACKGROUND DO MODAL

const botao_add = document.getElementById("botao_add"); // CAPTA O BOTAO DE 'ADICIONAR'

const botao_add_confirm = document.getElementById("add_confirm"); // CAPTA O BOTAO DE CONFIRMAR ADIÇÃO DE USUÁRIO

const botao_close = document.getElementsByClassName("btn_close"); // CAPTA TODOS OS BOTOES DE 'FECHAR' DA PÁGINA

const botoesCloseModal = [...botao_close]; // ALOCA TODOS OS BOTOES DE 'FECHAR' EM UM ARRAY

const botao_save = document.getElementsByClassName("btn_save"); // CAPTA TODOS OS BOTOES DE 'SALVAR' DA PÁGINA

const botoesSaveModal = [...botao_save]; // ALOCA TODOS OS BOTOES DE 'SALVAR' EM UM ARRAY =/=/=/=/= VERIFICAR INTEGRAÇÃO COM O BACKEND

const botao_delete = document.getElementsByClassName("btn_delete"); // CAPTA TODOS OS BOTOES DE 'DELETAR' DA PÁGINA

const botoesDeleteModal = [...botao_delete]
 
const botao = document.getElementsByClassName("botao"); // CAPTA TODOS OS BOTOES DA PÁGINA

const botoesModal = [...botao].filter((el) => { // ALOCA SOMENTE OS BOTOES QUE DATA-MODAL != NULL, OU SEJA, QUE ABREM QUALQUER TIPO DE MODAL
    return el.dataset.modal != null;
});

const modalAberto = function () { // VERIFICA QUAL MODAL ESTÁ ABERTO
    const modal = document.getElementsByClassName("aux_center");
    const modalOp = [...modal].filter((el) => {
        return !el.classList.contains("hide");
    })

    return modalOp[0];
}

const altModal = function (id) { // ALTERA O STATUS DO MODAL ENTRE HIDE E NO-HIDE 
    if(id == undefined){
        background_modal.classList.toggle("hide");
        const openedModal = modalAberto();
        openedModal.classList.toggle("hide");
    }
    else{
        const modalOpen = document.getElementById(id)
        modalOpen.classList.toggle("hide");
        background_modal.classList.toggle("hide");
    }
};

[...botoesModal, background_modal, ...botoesCloseModal, ...botoesSaveModal, ...botoesDeleteModal, botao_add, botao_add_confirm].forEach((el) => { // ONCLICK EVENT
    el.addEventListener("click", () => altModal(el.dataset.modal))  
});
