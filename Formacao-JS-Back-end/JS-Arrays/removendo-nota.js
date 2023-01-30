const notas = [10, 6, 8, 5.5, 10];

notas.pop(); //remove um item de um array

console.log(notas);

const media = (notas[0] + notas[1] + notas[2] + notas[3]) / notas.length;

console.log(`A média é ${media}.`);