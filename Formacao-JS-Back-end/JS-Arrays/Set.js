const nomes = ["Ana", "Clara", "Maria", "Maria", "João", "João", "João"];

const nomesAtualizados = [...new Set(nomes)]; // set é uma classe do js onde os itens não podem se repetir como regra.

console.log(nomesAtualizados);