// ------- CODE PRINCIPAL -------


let listes = document.querySelectorAll("ul>li"); //Je sélectionne le sli dans ul dans la variable listes (prend la forme d'une NodeList)
let nombreLI = document.querySelector(".selected-count"); //Je sélectionne la classe .selected-count dans NombreLI

// ------- FONCTIONS

for (const liste of listes) { //Une boucle for of qui permet de passer sur chaque élément de la nodeliste quand on click dessus 
    liste.addEventListener("click", onClickItem);
}
function onClickItem(event) { //Ajoute la classe selected à l'évenement click sur la cible en cours (donc qui subit le click) 
    event.currentTarget.classList.toggle("selected");
    liste = document.querySelectorAll("ul>.selected"); //Liste deviens que les éléments qui ont la classe .selectedc'est quoi ta condi
    console.log(liste.length);

    if (liste.length >= 1) { //Si la valeur des éléments sélectionné est > 0 alors on écrit ça dans nombreLI
        nombreLI.textContent = `Il y à ${liste.length} élément séléctionées`;
    }
    else { //Sinon on écrit ça 
        nombreLI.textContent = `Aucune sélection`;

    }
}