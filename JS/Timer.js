function bonjour() {
    // alert("bonjour");
    document.querySelector("body").style.backgroundColor = "red";
}

function compteur() {
    cpt++;
    let div = document.getElementById("compteur");
    div.textContent = cpt;
}

function stopCompteur() {
    //sert à stopper le setInterval
    clearInterval(timer);
}


let cpt = 0;

let timer = setInterval(compteur, 1000);

let button = document.getElementById("stop");

button.addEventListener('click', stopCompteur);
