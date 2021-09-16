

<!-- Listing de tous les cocktails -->
<?php foreach ($cocktails as $cocktail): ?>
    <article class="card cocktail">
        <a href="details_cocktail.php?id=<?=$cocktail['id']?>"><img class="card-img-top" src="<?=$cocktail['images']?>" alt=""></a> <!-- le lien doit être vers le controleur de la page le .php et c'est lui qui appelle le reste -->
        <div class="card-body">
            <h4 class="card-titla"><?=$cocktail['nom']?></h4>
            <p class="card-text"><?=$cocktail['description']?></p>
        </div>
    </article>
<? endforeach;?>
