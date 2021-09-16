<?php

/**
     * @Route ("supp/client/{id}", name="client_supp")
     */
    public function supp(CLIENTS $client): Response
    {

        $em = $this->getDoctrine()->getManager();
        $em->remove($client); //remove permet la suppression d'une ligne 
        $em->flush();

        return $this->redirectToRoute('client_index'); //va aller executer la méthode index 
    }

