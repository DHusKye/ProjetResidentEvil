                // --- 1 Déclaration des variable ---
let nom ="Amer";        // Déclare une variable modifiable (let)
let prenom ="Nix";  // Autre chaine de caractères
let age = 25;  // Déclare une variable de type nombre entier 
let isStudent = true;  // Déclare une variable boolénne (true/false)
let prix = 19.99 // Déclare une variable de type nombre décimal 
let uninitialized; // undefined par défaut (variable déclarée mais non initialisée )
let emptyObject = null; // Objet vide explicite 

//diférence entre variable var let et const 

function exemple () {
    var a = 1;
    let b = 2;
    const c = 3;
    let d = 4;

    if (true) {
        var a = 10; // Redéclare et écrase
        let b = 20; // Nouvelle variable locale au bloc 
        c = 30; // ❌ Erreur ; on ne peut pas réassigner une constante 
        console.log(a,b,c); // 10 , 20 , 3
    }

    console.log(a); // 10 modifié à l'intérieur 
    console.log(b); // 2 (valeur initiale)
    console.log(c); // 3 (constante)
} 	

let outputDiv = document.getElementById("output"); // Récupere 

outputDiv.innerHTML += `<p> Bonjour, je m'appele ${prenom} ${nom}  et j'ai ${age+5} ans</p>` ;

// --- 3 Les constantes -- 
 const PI = 3.14159; // Déclare une constante 
 const SITE_NAME = "MonSite"; // Autre constante
 outputDiv.innerHTML += `<p> La valeur de PI ${PI} </p>`;
 outputDiv.innerHTML += `<p> Bienvenue sur ${SITE_NAME} </p>`;


 // --- 4 Les conditions ----
 if (age >= 18) { // Vérifie si la personne à 18 ans ou plus 
    outputDiv.innerHTML += ` <p> Vous êtes majeur. </p>`;
 }
 else {
    outputDiv.innerHTML += `<p> Vous êtes mineur. </p>`;
 }

 // // --- 5 . Les boucles ---
 for (let i = 1; i <= 5; i++) { // Boucle for qui affiche 
    outputDiv.innerHTML += `<p> Itération : ${i} </p>` ;
 }

let inde = 1;
while (inde <= 5) {
   outputDiv.innerHTML += `<p> Itération (while) : ${inde} </p>` ;
   inde++;
}

 // // --- 6 . Les tableaux ---
 let fruits = ["Pomme", "Banane", "Orange"]; // Déclare un tableau
 outputDiv.innerHTML += `<p> Deuxieme fruit : ${fruits[1]} </p>`;

 // Parcours du tableau avec forEach
 fruits.forEach(fruit => {
   outputDiv.innerHTML += `<p> ${fruit} </p>`  
 });

 for (let i=0 ; i < fruits,length; i++){
   outputDiv.innerHTML += `<p>Fruit ${i + 1 } : ${fruits[i]} </p>`;
 }

 // // Les tableaux associatifs (objets en JS)

 let prixFruits = { //Déclare objet
   "Pomme" : 1.20,
   "Banane" : 0.80,
   "Orange" : 1.00
   };
   outputDiv.innerHTML += `<p> ${prixFruits.Orange}</p>`;

   // // Parcours de l'objet acec une boucle for _ _ _ in 
   for (let fruit in prixFruits) {
      outputDiv.innerHTML += `<p> Le prix de ${fruit} est le ${prixFruits[fruit]} €`;
   }

   // --- 7 Les fonctions ---
   function sayHello(name) { // Déclare une fonction qui retourne un nom
      return `Bonjour , ${name}!`;
   }
   function sayHelloo() { // Déclare une fonction qui retourne un nom
      return `Bonjour , fdp!`;
   }
   outputDiv.innerHTML += `<p> ${sayHello("Alice")}</p>`;
   outputDiv.innerHTML += `<p> ${sayHelloo()}</p>`; // Appel le prenom Alice
   fruits.forEach (fruit => {
      outputDiv.innerHTML += `<p>${sayHello(fruit)}</p>`
   })

   // // --- 8. Les opérateurs de comparaison ---
 let testAge = 25;
 if (testAge === 25) { // strictement égal à 25 (même type et même valeur)
     outputDiv.innerHTML += `<p>Vous avez exactement 25 ans.</p>`;
 }

 if (testAge !== 30) { // strictement différent de 30
     outputDiv.innerHTML += `<p>Vous n'avez pas 30 ans.</p>`;
 }

// // --- 9. Les opérateurs logiques ---
 let isAdult = age >= 18;
 let isSenior = age > 60;
 if (isAdult && !isSenior) { // Si la personne est adulte mais pas senior
     outputDiv.innerHTML += `<p>Vous êtes un adulte mais pas un senior.</p>`;
 }

// // --- 10. Manipulation d'objets ---
 let personne = { nom: "Amer", age: 25 }; // Création d'un objet
 personne.age = 26; // Modification de la valeur de la propriété
 personne.email = "amernix@example.com"; // Ajout d'une nouvelle propriété
 outputDiv.innerHTML += `<p>Nom: ${personne.nom}, Âge: ${personne.age}, Email: ${personne.email}</p>`;

// // --- 11. Les événements ---
 //let button = document.getElementById("myClique"); // Récupère le bouton
 //button.addEventListener("click", () => { // Ajoute un événement au clic
   //  outputDiv.innerHTML += `<p>Le bouton a été cliqué !</p>`;
 //});

// // --- 12. Les chaînes de caractères ---
 let greeting = "Bonjour, " + prenom + " " + nom + "la put3"; // Concaténation de chaînes "" c'est le caractere espace 
 outputDiv.innerHTML += `<p>${greeting}</p>`; // Affichage du message de salutation




 // Exercice cliqueur 
 //let number = 1; 
//let clique = document.getElementById("myClique"); // Récupère le bouton
 //clique.addEventListener("click", () => { // Ajoute un événement au clic
     //outputDiv.innerHTML = `<p>Tu augmente ${ number = number+number } ton niveau !</p>`;
 //});

 //let reset = document.getElementById("Reset");
 //reset.addEventListener("click", () =>  {
  // outputDiv.innerHTML = `<p> J'ai tes reset fdp : ${number=0} !!!!`
 //});




 // Exercice alphabet tableau + boucle + foreach 
//afiicher lettre de l'alphabt haut en bas  

 let alphabets = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
 let Suivant = 0;
 console.log(alphabets.lenght);

 
 alphabets.forEach(alphabet => {
    outputDiv.innerHTML += `<p>${alphabet} </p>`
   });
   
   
   let beta = document.getElementById("Alphabet");
   beta.addEventListener ("click" , () => {
      outputDiv.innerHTML += `${alphabets [Suivant]}`;  // avec le + il s'affiche a la ligne et sans le + il remplace la lettre 
      Suivant++;
      
      if (Suivant == alphabets.length ){
         outputDiv.innerHTML= ``;
      Suivant = 0;
   }});
   //if votre Suivant arrive a 26 donc consoloalphabet lenght 
   

//   blague nul click la blague click la reponse 
//  une phrase genere aleatoirment donne une suite aleatoire aussi et ca plusierus fois 
// les phrase aleatoire avec des switch case  docuement sur internet 
   

//let question = "Qu'est qu'un exorcisme inverse ?"

//let reponse = "Quand le diable dit au prete de sortir de l'enfant."

//question.forEach(question => {
   //outputDiv.innerHTML += `${question}`
//});

//i = 0

//let blague = document.getElementById("");
//blague.addEventListener ("click", () => {
  // outputDiv.innerHTML += `${question}`;
   //i++
   //if (i=2){
     // outputDiv.innerHTML=`${reponse}`;
   //};
//});




let joke = ["Qu'est qu'un exorcisme inverser ?", "Quand le diable dit au prete de sortir de l'enfant."];


let questionne = document.getElementById("Blague");

let index = 0;


questionne.addEventListener ("click" , () => {
   if (index <= 0){
      outputDiv.innerHTML += `<p>${joke[index]} </p>`;
      index++;
   } else {
      outputDiv.innerHTML += `<p>${joke[index]} </p>`;
      index = 0;
   };
});






