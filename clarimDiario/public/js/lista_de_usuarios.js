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

const botoesModal = [...botao].filter((botao) => { // ALOCA SOMENTE OS BOTOES QUE DATA-MODAL != NULL, OU SEJA, QUE ABREM QUALQUER TIPO DE MODAL
    return botao.dataset.modal != null;
});

const modalAberto = function () { // VERIFICA QUAL MODAL ESTÁ ABERTO
    const modal = document.getElementsByClassName("aux_center");
    const openedModal = [...modal].filter((modal) => {
        return !modal.classList.contains("hide");
    })

    return openedModal[0];
}

const altModal = function (id) { // ALTERA O STATUS DO MODAL ENTRE HIDE E NO-HIDE 
    if(id == undefined){
        background_modal.classList.toggle("hide");
        const openedModal = modalAberto();
        openedModal.classList.toggle("hide");
    }
    else{
        const openedModal = document.getElementById(id)
        openedModal.classList.toggle("hide");
        background_modal.classList.toggle("hide");
    }
};

[...botoesModal, background_modal, ...botoesCloseModal, ...botoesSaveModal, ...botoesDeleteModal, botao_add, botao_add_confirm].forEach((botao) => { // ONCLICK EVENT
    botao.addEventListener("click", () => altModal(botao.dataset.modal))  
});
