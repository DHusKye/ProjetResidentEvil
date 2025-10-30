
// Chiffrement

let inputTexteCommentaire = document.getElementById("inputTexteCommentaire");

let bouttonNombreChiffrement = document.getElementById("nombreChiffrement");

// let boutonEffacerChiffrement = document.getElementById("effacerChiffrement");

let resultatChiffrement = document.getElementById("resultatChiffrement");


const alphabet = 'abcdefghijklmnopqrstuvwxyz'.split("");


function Chiffrement(decalageNombreChiffrement) {
    let resultat = "";
    console.log();
    const inputText = inputTexteCommentaire.value;
    console.log(inputText);
    const moduloKey =  (decalageNombreChiffrement % 26) + 26 % 26;
    console.log(moduloKey);

    for (let i = 0; i < inputText.length; i++) {
        let lettre = inputText[i];
        console.log(lettre);
        const mini = lettre.toLowerCase(); 
        // console.log(mini);
        const position = alphabet.indexOf(mini);
        console.log(position);
        
        if ( /[A-Za-z]/.test(lettre)) {
            const nouvellePosition = (position + moduloKey) % 26;
            console.log(nouvellePosition);
            resultat += alphabet[nouvellePosition];
            console.log(resultat);
        }
        else {
            resultat += lettre ;
        }
        resultatChiffrement.value = resultat;
        console.log();
    };
    console.log();
};

inputTexteCommentaire.addEventListener("input" ,function()  {  //boutonchiffrement peut etre remplacer avec inputtexte et cahnge input par bouton 0
    let decalageNombreChiffrement = document.getElementById("decalageNombreChiffrement").value ;
    Chiffrement(decalageNombreChiffrement);
    console.log();
});
console.log();