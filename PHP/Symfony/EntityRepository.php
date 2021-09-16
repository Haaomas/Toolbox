<?php

//Repository qui séléctionne tous les champs de la BDD

    /**
    * @Route("/client", name="client_index")
    */
    public function index(CLIENTSRepository $clientRepository): Response 
    {
        return $this->render('client/index.html.twig', [
            'clients' => $clientRepository->findAll(), ]); //Selection de tous les champs de la base de données 
    }


    //Repository qui séléctionneun seul champ de la BDD

    /**
    * @Route ("show/client/{id}", name="client_show")
    */
    public function show($id, CLIENTSRepository $clientRepository): Response
    {
        $client = $clientRepository->findOneById($id);
        return $this->render('client/detail.html.twig', [
            'client' => $client,]);
    }
