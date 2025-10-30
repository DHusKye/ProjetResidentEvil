let numero = document.getElementById("numero");

let bouton = document.getElementById("relance");

let chiffretotal = document.getElementById("chiffretotal");


// let i = 0;


bouton.addEventListener("click" , () => {

    numero.innerHTML = ``;

    console.log(bouton);
    
    for (let i = 0 ; i < 10; i++){    // tant que i n'est pas = a getramdom et beh tu continue a faire des iteration, i++ = chaque iteratio nde rajoute 1 a i   
        
        const random = Math.floor(Math.random(0) * (10000));
        numero.innerHTML += `<li> ${random}</li>`;
        console.log();
        
        
        if (numero < 5000 && numero % 4 === 0){
            console.log(numero % 4 === 0)
            numero.innerHTML += ``; 
            console.log();
                           //<li style="color:red;"></li>
        };

        

    };

});


    