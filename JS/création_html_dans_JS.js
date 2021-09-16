const tasksElement = document.getElementById("tasks"); //la div ou placer les éléments 
console.log(tasksElement);



const addTaskElement = document.getElementById("addTask"); //un boutton 
const refreshElement = document.getElementById("refresh"); // on autre boutton


refreshElement.addEventListener("click", () => { //JS arrow function
    const animals = [ //Tableau avec des objets
        {
            type: "chat",
            age: 12
        },
        {
            type: "chien",
            age: 18
        },
        {
            type: "oiseau",
            age: 1800
        }
    ];


    let animalElement;
    // tasksElement.innerHTML = null; si l'on souhaite remettre à zéro à chaque click

    for (animal of animals) { //Pour chaque elements du tableau 
        console.log(animal.type);
        animalElement = document.createElement("p"); //Créer un éléments p
        animalElement.innerText += animal.type; //Mettre ça dedans 
        animalElement.innerText += " Age : " + animal.age; //Mettre ça dedans 
        animalElement.innerText += `Type : ${animal.type}`; //Mettre ça dedans 
     //laOuIlVaEtrePlacé.outilsPourPlacéUnElement(ceQueLonVeuxPlacer)  
        tasksElement.appendChild(animalElement);
    }
    
})

addTaskElement.addEventListener("click", function () { //anonyme function
    
    // Crée un élément en JS avec createElement
    let userElement = document.createElement('p');//créer l'élement
    userElement.innerText += "Jean"; //Mettre ça dedans
    userElement.innerText += " De la Fontaine";//Mettre ça dedans
    userElement.style.border = "solid";//Lui attribuer une bordure 
    userElement.className = "user";//Lui attribuer une classe
    //laOuIlVaEtrePlacé.outilsPourPlacéUnElement(ceQueLonVeuxPlacer)  
    tasksElement.appendChild(userElement);
})



// Pour aller plus loin : ForEach, et map

// JS arrow function () => {}
// Fonctions anonymes function() {}