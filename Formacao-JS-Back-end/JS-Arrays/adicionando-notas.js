//mesmo declarando o array em uma constante, é possivel atera-lo utilizando metodos.

const notas = [10, 6, 8];

notas.push(7); // adiciona itens no array

const media = (notas[0] + notas[1] + notas[2] + notas[3]) / notas.length;

console.log(media);