{{ form }} permet dafficher tout le formulaire

{{ form_start  }} permet de générer la balise <form> avec les différents attributs

{{ form_end }} permet de générer la fermeture de <form> avec les différents champs restants non affichés

{{ form_errors }} affiche les erreurs éventuelles du formulaire

{{ form_widget(mon formulaire.nomduchamps) }} affiche le type de champs

{{  form_label(mon formulaire.nomduchamps) }} affiche le label du champs

{{ form_row(monformulaire.nomduchamps) }} affiche le form_widget et form_label

{{ form_rest }} affiche les champs restants non récupéré précédemment (token de vérification par exemple)