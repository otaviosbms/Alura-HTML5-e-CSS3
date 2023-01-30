const alunos = [
    'João',
    'Juliana',
    'Ana',
    'Caio',
    'Lara',
    'Marjorie',
    'Guilherme',
    'Aline',
    'Fabiana',
    'Andre',
    'Carlos',
    'Paulo',
    'Bia',
    'Vivian',
    'Isabela',
    'Vinícius',
    'Renan',
    'Renata',
    'Daisy',
    'Camilo'
];

const sala1 = alunos.slice(0, alunos.length / 2) //"fatia" o array, sendo determinado qual periodo dele desejamos alterar. (não muda o array original, retorna um array novo).
const sala2 = alunos.slice(alunos.length / 2,)

console.log(sala1);