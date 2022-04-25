//keydown quand on enfonce la touche et keyup quand on lâche le doigt
document.addEventListener("keydown", onKeyDown);

let paragraphe = document.querySelector("articlr>p");

function onKeyDown(event) {
    //en fonction de la key énoncée, je vais faire des actions différentes 
    switch (event.key) { //Pour tester la propriétés key
        case "F12": //F012 etc en majuscule
            alert("C'est la console");
            break;
        case "a": //lettre en minuscule
            alert("Ouahh la touche aaa");
            break;
        case "r":
            nombreLI.style.backgroundColor = "pink"   //mettre une couleur en JS (marche avec reg et #fff (en camelCase en JS)
            break;
        case "c":
            nombreLI.style.color = "rgb(255, 255, 255)";
            break;
        default:
            alert("Prout prout prout");
    }
}
