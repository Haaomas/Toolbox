<?php

/**
    * @Route("/new/client", name="client_new")
    */
    public function newClient(Request $request): Response 
    {
        $client = new CLIENTS();
        $form= $this->createFormBuilder($client)

        ->add('nom')
        ->add('prenom')
        ->add('age')
        ->add('Genre')
        ->add('save', SubmitType::class, ['label' => 'Ajouter client']) //Ajoute un bouton de sauvegarde
        ->getForm(); //Récupère le formulaire créer 

        $form->handleRequest($request); //($request est une classe qui récupère toute les variables envoyé par le serveur )
        if ($form->isSubmitted() && $form->isValid()) { //si soumit et validé 
        $client = $form->getData(); //client récupère les données
        $em = $this->getDoctrine()->getManager(); //déclanchement de la sauvegarde
        $em->persist($client);
        $em->flush();
        return $this->redirectToRoute('client_index'); //renvoie à l'index de base 

        
    }
    return $this->render('client/form.html.twig', ['form' => $form->createView()]);
    }

    //Theme Bootstrapp ppour le formulaire à placer dans config/pakage/twig.yaml
    form_themes: ['bootstrap_4_layout.html.twig']   

    //HTML.TWIG

    {% extends 'base.html.twig' %}

    {% block title %}  ClientController! {% endblock %}

    {% block body %}


    {{ form(form) }} // le premier c'est la clé tartopome et le 2eme (c'est la fonction form obligatoire) 

    {% endblock %}
