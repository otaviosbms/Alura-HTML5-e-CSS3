const form = document.getElementById("novoItem")
const lista = document.getElementById('lista')
const itens = JSON.parse(localStorage.getItem("itens")) || [] // JSON.parse -> converte as strings do json em formato de javascript

itens.forEach( (elemento) => {
    criaElemento(elemento)
})


function criaElemento(item) {

    const novoItem = document.createElement('li')
    novoItem.classList.add("item")

    const numeroItem = document.createElement('strong')
    numeroItem.innerHTML = item.quantidade

    novoItem.appendChild(numeroItem)
    novoItem.innerHTML += item.nome

    const lista = document.getElementById('lista')
    lista.appendChild(novoItem)

}



form.addEventListener("submit", (evento)=> {
    evento.preventDefault()

    const nome = evento.target.elements['nome']
    const quantidade = evento.target.elements['quantidade']
    const itemAtual = {
        "nome": nome.value, 
        "quantidade": quantidade.value
    }

    criaElemento(itemAtual)

    itens.push(itemAtual)

    localStorage.setItem("itens", JSON.stringify(itens)) // o local storage apenas permite guardar strings

    nome.value = ""
    quantidade.value = ""

})

//localStorage guarda informações de forma persistente no navegador,
//sendo em média 5MB de armazenamento padrão, podendo variar dependendo do navegador utilizado.
//Este limite pode ser aumentado pelo usuário quando necessário, no entanto apenas alguns navegadores suportam isso.
//Os dados salvos são apenas do tipo string texto.