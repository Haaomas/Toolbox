
//Stocker l'url de l'API dans une variable 
const randomImageUrl = "https://api.thecatapi.com/v1/images/search?limit=10";

// On fait la requête
fetch(randomImageUrl)
    // Une fois reçu, on convertit
    .then((response) => {
        console.log(response);
        // Si jamais response.status !== 200, soulever une alerte pour indiquer qu'il y a eu une erreur
        return response.json();
    })
    // Une fois converti, on fait le traitement
    .then(data => {
        console.log(data);
        data.forEach(cat => {
            // Créer notre image
            const imageElement = document.createElement("img");
            imageElement.src = cat.url;
            imageElement.style.width = "200px";
            document.getElementById("cats").appendChild(imageElement);
        })
    });

