const x = document.getElementById('X');
const y = document.getElementById('Y');

const resultat = document.getElementById('resultat');
const btn = document.getElementById('btn');

const op = document.getElementById('op');



function addition(a, b) {
    return a + b;
};

function soustraction(a, b) {
    return a - b;
};

function multiplication(a, b) {
    return a * b;
};

function division(a, b) {
    return a / b;
};

function modulo(a, b) {
    return a % b;
};

function puissance(a, b) {
    return a ** b;
}; 

function sinus(a, b) {
    return Math.sin(a, b);
};

function cosinus(a, b){
    return Math.cos(a) * b;
};

function tangente(a, b) {
    return Math.tan((a*b) / 180);
}

btn.addEventListener('click', () =>{
    if (x.value === '' || y.value === '') {
        resultat.innerText = 'Veuillez entrer deux nombres.'
        return;
    }
    else{
        const a = parseFloat(x.value);
        const b = parseFloat(y.value);

        let resultatOperation;
        switch (op.value) {
            case'+' : resultatOperation = addition(a, b);
                break;
            case'-' : resultatOperation = soustraction(a, b);
                break;
            case'*' : resultatOperation = multiplication(a, b);
                break;
            case'/' : resultatOperation = division(a, b);
                break;
            case'%' : resultatOperation = modulo(a, b);
                break;
            case'**' : resultatOperation = puissance(a, b);
                break;
            case 'sin' : resultatOperation = sinus(a, b);
                break;
            case'cos' : resultatOperation = cosinus(a, b);
                break;
            case'tang' : resultatOperation = tangente(a, b);
                break;
            
            default : resultat.innerText = "Opération incconue";
            return;

        }
        console.log(resultatOperation)
        // if (resultatOperation < 0) {
        //     resultat.innerText = 'chiffre negatif ducon la joie';
        //     return;
        // };
        resultat.innerText = `Resultat Operation : ${resultatOperation}`;
        return;
        
    };


});
























