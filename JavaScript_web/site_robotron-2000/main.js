const controle = document.querySelectorAll(".controle-ajuste")



// => arrow function

controle.forEach((elemento) => {
    elemento.addEventListener("click", (evento) => {
        manipuladados(evento.target.textContent, evento.target.parentNode)
    })
})


function manipuladados(operacao, controle){
    const peca = controle.querySelector(".controle-contador")  

    if( operacao === "-"){
        peca.value = parseInt(peca.value) - 1
    } else{
        peca.value = parseInt(peca.value) + 1
    }
}