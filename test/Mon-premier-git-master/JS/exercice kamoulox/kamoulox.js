let outputDiv = document.getElementById("output"); 

let alea = document.getElementById("alea");

let index = 0;

let asuna = ["qu'est qu'un radin " , "quand est tu venu me ", "comment va tu me "];
let kirito = ["branchiosaure", "Casse toi fils de poulpe", "Va voir ailleurs si j'y suis"]; 


function getRandomInt (max){
     return Math.floor(Math.random() * (max));
  };


alea.addEventListener("click", () => 
{
    console.log(index);



if (index == 0)   {
   // switch (asuna[getRandomInt(3)]) {
   //    case "qu'est qu'un radin " : outputDiv.innerHTML = `qu'est qu'un radin `;
   //       break ;
   //    case "quand est tu venu me " : outputDiv.innerHTML = `quand est tu venu me `;
   //       break ;
   //    case "comment va tu me " : outputDiv.innerHTML = `comment va tu me  `;
   //       break ;
  outputDiv.innerHTML = asuna[getRandomInt(3)];
   index++
   };    //Test le changement 
//}
if (index == 1){

   // switch (kirito[getRandomInt(3)]) {
   //    case "branchiosaure" : outputDiv.innerHTML += `branchiosaure`;
   //       break;
   //    case "Casse toi fils de poulpe" : outputDiv.innerHTML += `Casse toi fils de poulpe`;
   //       break;
   //    case "Va voir ailleurs si j'y suis" : outputDiv.innerHTML += `Va voir ailleurs si j'y suis`;
   //       break;
  outputDiv.innerHTML += kirito[getRandomInt(3)];
  index = 0;
};
});






// faire un pop up et un ajx de photo de chat qui apparait aleatoirement 



