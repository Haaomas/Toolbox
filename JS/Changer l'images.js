// ---- FONCTIONS pour une images et un bouton qui change quand on click dessus
let mouseX;
let mouseY;

function whereMouse(event) {

    mouseX = event.pageX;
    mouseY = event.pageY;
    
    document.getElementById('imp1').value = mouseX
    document.getElementById('imp2').value = mouseY
    console.log(event)
}


function changePicture() {
    if ((toggleButton.textContent) == ("Allumer la lumière !")) {
        toggleButton.textContent = "Eteignez la lumière ! ";
        document.getElementById("lightbulb").src = "./images/on.png";
    }
    else {
        document.getElementById("lightbulb").src = "./images/off.png";
        toggleButton.textContent = "Allumer la lumière !";
    }
}


// Changer une images
document.getElementById("lightbulb").src = "./images/on.png";
