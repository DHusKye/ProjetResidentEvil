const ticketCinema = {
    nomFilm: "Demon Slayer",
    prix: 10.99 ,
    numeroDeSalle : 17,
};

let nom = "Nezuko" ;


let messageBorne = "Bonjour ";
messageBorne += nom;
messageBorne += " votre film ";
messageBorne += ticketCinema.nomFilm;
messageBorne += " est la salle ";
messageBorne += ticketCinema.numeroDeSalle;
messageBorne += "."



let texteAffichage = "Bonjour " + nom + ", votre film " + ticketCinema.nomFilm + " est en salle " + ticketCinema.numeroDeSalle +"."; 


console.log(messageBorne);


console.log(texteAffichage);