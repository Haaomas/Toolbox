

//Prend en compte des variable pour faire apparaître l'image sur la position su click 

let mouseX;
let mouseY;

function whereMouse(event) {

    mouseX = event.pageX;
    mouseY = event.pageY;

    document.getElementById('imp1').value = mouseX
    document.getElementById('imp2').value = mouseY
    console.log(event)
}


let nCage = document.getElementById("cage");
document.addEventListener("click", letsMoveCageAround, true);

function letsMoveCageAround(event) {
    whereMouse(event);
    nCage.style.position = "absolute";
    nCage.style.display = "block";
    nCage.style.top = (mouseY - 141) + "px";
    nCage.style.left = (mouseX - 250) + "px";
}
