function onKeyDown(event) {
    switch (event.key) { //Pourtester la propriétés key
        case "ArrowUp":
            hautBas--;
            rectangle.style.top = hautBas + "px";
            break;
        case "ArrowDown":
            hautBas++;
            rectangle.style.top = hautBas + "px";
            break;
        case "ArrowLeft":
            gaucheDroite--;
            rectangle.style.left = gaucheDroite + "px";
            break;
        case "ArrowRight":
            gaucheDroite++;
            rectangle.style.left = gaucheDroite + "px";
            break;
        default:
            alert("NICOLAS");
    }
}
