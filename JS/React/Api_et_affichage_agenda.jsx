//Fichier APP.js (le main en gros)

import React, { useState } from "react";
import logo from "./logo.svg";
import "./App.css";
import Agenda from "./componants/Agenda"

function App(props) {

    return (
        <div className="App">
            <header className="App-header">
                <h1>AGENDA</h1>
                <Agenda />
            </header>
        </div>
    );
}

export default App;

//Fichier Agenda.jsx (s'ocuupe de la récupération de L'API et de la création de la boucle.map)

import React, { useEffect, useState } from "react";
import Card from "./Card";


function Agenda() {
    const UlrApi = "https://data.iledefrance.fr/api/records/1.0/search/?dataset=evenements-publics-cibul&q=&rows=36"
    const [evenement, setEvenement] = useState([]) // variable d'état qui permet d'être à l'écoute du moindre changement à la différence d'une vraiable normal

    useEffect(() => { //attendre le chargement pour afficher e résulat
        fetch(UlrApi) //récupère les données de cette url
            .then((response) => { //il nous donne une promesse 
                return response.json(); //retourne moi une réponse en json
            }).then((data) => { //data = données converti en json 
                setEvenement(data.records) //stock la valeur de data.record dans evenement (le tableau)
            });
    }, []);
    console.log(evenement)

    return (
        <div>
            {evenement.map((element, index) => { //boucle map (vas plus vite) 
                return (
                    <Card
                        titre={element.fields.title}
                        description={element.fields.description}
                        link={element.fields.link}
                        image={element.fields.image}
                    />
                )
            })}
        </div>
    );
}

export default Agenda;

//Fchier Card.jsx (s'occupe du templates d'une card en particulier)

import React from "react";

function Card(props) { //permet d'envoyer les parametre rentrer dans <Card/> 
    return (
        <div>
            <h1>{props.titre}</h1> {/*props.titre pour dire je veux la propriété titre noté dans <Card/> dans Agenda*/}
            <p>{props.description}</p>
            <img src={props.image} alt="" />
            <a href="">{props.link}</a>
        </div>
    )
}

export default Card;