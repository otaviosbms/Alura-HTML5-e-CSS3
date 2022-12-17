const subtrair = document.querySelector("#subtrair")
const somar = document.querySelector("#somar")
const braco = document.querySelector("#braco")

const controle = document.querySelectorAll(".controle-ajuste")



// => arrow function

controle.forEach((elemento) => {
    elemento.addEventListener("click", (evento) => {
        manipuladados(evento.target.textContent)
    })
})


function manipuladados(operacao){
    if( operacao === "-"){
        braco.value = parseInt(braco.value) - 1
    } else{
        braco.value = parseInt(braco.value) + 1
    }
}