function changeColor(event){ //relié à un currentTarget pour selectionner uniquement le fichier qui subit l'évènement
    console.log(event.currentTarget);
    event.currentTarget.classList.toggle("pink");
}
