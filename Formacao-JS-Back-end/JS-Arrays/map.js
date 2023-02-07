const notas = [10, 9.5, 8, 7, 6];

const notasAtualizadas = notas.map((nota) => {  // .map() -> altera o valor de todos os itens do array, retornando um novo array.
  return nota + 1 >= 10 ? 10 : nota + 1;
});

console.log(notasAtualizadas);