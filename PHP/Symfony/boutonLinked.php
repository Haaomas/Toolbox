

<a href="{{ path('client_new')}}">  l'appelle se fait par le nom de la methode(client_new) 
	<button >Ajouter</button>
</a>

<a href="{{ path('client_show', {'id' : client.id})}}">  l'appelle se fait par le nom de la methode(client_show) et on veux récupérer l'id donc clé id valeur client.id
	<button >Détail</button>
</a>