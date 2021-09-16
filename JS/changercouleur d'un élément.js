    
    // Fonctionne avec les class en CSS qui contienne les couleurs 

        

let bouton = document.querySelector("#toggle-rectangle");
let rectangle = document.querySelector(".rectangle");

bouton.addEventListener("click", hideShowContent);
rectangle.addEventListener("mouseleave", out);
rectangle.addEventListener("dblclick", green);
rectangle.addEventListener("mouseover", passOnIt);

//Fonction

function hideShowContent() {
    rectangle.classList.toggle("hide");
}

function passOnIt() {
    rectangle.classList.add("important");
}

function green() {
    rectangle.classList.toggle("good");
}
function out() {
    rectangle.classList.remove("important");
    rectangle.classList.remove("good");
}
