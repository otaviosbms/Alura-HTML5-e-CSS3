const form = document.getElementById("novoItem")
const lista = document.getElementById('lista')

form.addEventListener("submit", (evento)=> {
    evento.preventDefault()

    var nome = evento.target.elements['nome'].value
    var quantidade = evento.target.elements['quantidade'].value

    criaElemento(nome, quantidade)
})

function criaElemento(nome, quantidade) {

    const novoItem = document.createElement('li')
    novoItem.classList.add("item")

    const numeroItem = document.createElement('strong')
    numeroItem.innerHTML = quantidade

    novoItem.appendChild(numeroItem)
    novoItem.innerHTML += nome

    const lista = document.getElementById('lista')
    lista.appendChild(novoItem)
}