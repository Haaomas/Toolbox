//Boucle pour ajouter un évement 
//boucle for un peux vielle ES5
for (let i = 0; i < paragraphes.length; i++) { //Obliger de faire une boucle pour toucher tous les paragraphe 
    paragraphes[i].addEventListener("click, changeColor"); //Sert à parcourir le tableau, ajoute un événement, et créer une fonction
}



//boucle for ... of ES2016
// On créer un variable qui représnete une case 
for (const paragraphe of paragraphes) { //un pluriel et un singulier en bonne pratique 
    paragraphes.addEventListener("click", changesColor)
}

