const alunos = ["Ana", "Marcos", "Maria", "Mauro"];
const medias = [7, 4.5, 8, 7.5];

const reprovados = alunos.filter((aluno, indice) => {  // filter, filtra o array gerando um novo arry conforme as condições especificadas.
  return medias[indice] < 7;
});

console.log(reprovados);