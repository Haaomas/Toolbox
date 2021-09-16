// ---- VARIABLES ET CONSTANTES GLOBALES

let currentPhoto = 0; // Numéro de la photo courant affichée (indice dans le tableau ci-dessous)
let photos = document.querySelectorAll("img");;        // Tableau d'objets DOM(object HTML) représentant les balises <img>



setInterval(carouselTheOffice, 1000);
// ---- FONCTIONS
function carouselTheOffice() {
    photos[currentPhoto].classList.remove("visible");
    currentPhoto++
    if (currentPhoto <= (photos.length - 1)) {
        photos[currentPhoto].classList.add("visible");
    }
    else {
        photos[0].classList.add("visible");
        currentPhoto = 0;
    }
}
