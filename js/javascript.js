

var frases = new Array('Frase 1','Frase 2','Frase 3','Frase 4','Frase 5','Frase 6');
function cambiaFrase(){
document.getElementById('frase').innerHTML=frases[parseInt(Math.random() * frases.length)];
}

