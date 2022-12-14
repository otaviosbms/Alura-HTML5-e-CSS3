

function TocaSom (idelementoaudio) {
    document.querySelector(idelementoaudio).play();
}

const listadeteclas = document.querySelectorAll('.tecla');


let contador = 0;


while (contador < listadeteclas.length) {

//verção com for: (desabilitar o primeiro e o ultimo contador)
//for (let contador = 0; contador < listadeteclas.length; contador++) {


    const tecla = listadeteclas[contador];
    const instrumento = tecla.classList[1];
    const idaudio = `#som_${instrumento}`; //template string


    tecla.onclick = function () {
        TocaSom(idaudio)
    }

    contador=contador + 1; // <-- este comendo pode ser torcado por "contador++;"

}
