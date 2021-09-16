<?php

public function newClient(): Response 
{
    $client = new CLIENTS ();

    $client->setNom('Gallagher'); // liste des champs à remplir avec le set qui se trouve dans Entity 
    $client->setPrenom('Franck');
    $client->setAge('55');
    $client->setGenre('Homme');

    $em = $this->getDoctrine()->getManager(); 
    $em->persist($client); //déja préparer donc pas besoin d'argument dans Flush
    $em->flush();

    return $this->redirectToRoute('client_index'); //va aller executer la méthode index (relier via le name)
}