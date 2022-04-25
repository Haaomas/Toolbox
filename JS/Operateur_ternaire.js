/*
 * Définition de l'opérateur ternaire
 * condition ? val1 : val2
 * Si la condition est vrai (true) alors (?) utilise la valeur 1 (val1)
 * Sinon utilise la valeur 2 (val2)  
 */

let statut = (âge >= 18) ? "adulte" : "mineur";

/* Pareil que d'écrire 
if (âge >= 18) {
    âge = "adulte";
} else {
    âge = "mineur"
}
Mais gros gain de ligne !!
*/