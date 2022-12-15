

function TocaSom (seletoraudio) {
    const elemento = document.querySelector(seletoraudio);

    //\/ segurança do codigo no console \/ (não fazer o uso inapropriado da função TocaSom)

    if(elemento /* != null */ && elemento.localName === 'audio'){   // && = and (no JS, não é necessario escrever que o elemento é diferente de null, pois o codigo já sabe que ele não existe)
        elemento.play();
    }
   else(){
    console.log('Elemento não encontrado ou seletor inválido')
   }
}



const listadeteclas = document.querySelectorAll('.tecla');


//let contador = 0;


//while (contador < listadeteclas.length) {
//verção com while: (ligar o primeiro e o ultimo contador)
for (let contador = 0; contador < listadeteclas.length; contador++) {


    const tecla = listadeteclas[contador];
    const instrumento = tecla.classList[1];
    const idaudio = `#som_${instrumento}`; //template string


    tecla.onclick = function () {
        TocaSom(idaudio)
    }
    
    tecla.onkeydown=function(evento){

        if (evento.code ==='Space' || evento.code ==='Enter'){ // || = or
            tecla.classList.add('ativa');
        }

    }

    tecla.onkeyup=function(){
        tecla.classList.remove('ativa');
    }



    //contador=contador + 1; // <-- este comendo pode ser torcado por "contador++;"
}


