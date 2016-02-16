

var frases = new Array('Bier0n | Élite del etilismo','Bier0n | La RESACA es para los que dejan de beber','Bier0n | ¿Borracho yo?, ¡TURURÚ!','Bier0n | ¡La penúltima, JEFE!','Bier0n | Fans de la tarta al güisqui, sin tarta y con cocacola','Bier0n | La tapa no es una opción');
function cambiaFrase(){
document.getElementById('frase').innerHTML=frases[parseInt(Math.random() * frases.length)];
}

