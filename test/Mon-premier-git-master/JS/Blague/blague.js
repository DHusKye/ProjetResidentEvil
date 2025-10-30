
let outputDiv = document.getElementById("output"); 



let joke = ["Qu'est qu'un exorcisme inverser ?", "Quand le diable dit au prete de sortir de l'enfant."];


let question = document.getElementById("Blague");

let index = 0;


question.addEventListener ("click" , () => {
   if (index <= 0){
      outputDiv.innerHTML = `<p>${joke[index]} </p>`;
      index++;
   } else {
      outputDiv.innerHTML = `<p>${joke[index]} </p>`;
      index = 0;
   };
});






