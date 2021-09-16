<!-- Si l'id de la variable famille qui contient la table famille mais juste pour un tour celle au singulier et == au numéro de la catégorie famille dans la variable leCocktail qui contient toutes les infos sur le cocktail sur la page affiché. Alors j'affiche une option avec un selected, sinon j'affiche juste la liste normal après -->

<?php foreach ($familles as $famille) : ?>
    <?php if ($famille['id'] == $leCocktail['famille']) : ?>
        <option selected value="<?= $famille['id'] ?>"><?= $famille['alcohol'] ?>
        </option>

    <?php else : ?>
        <option value="<?= $famille['id'] ?>"><?= $famille['alcohol'] ?>
        </option>
    <?php endif; ?>
<? endforeach; ?>

<!-- Code de tiffany -->


<?php foreach ($nomDesFamilles as $nomDesFamille) : ?>
    <?php if ($nomDesFamilles["id"] == $oneCocktail["id_famille"]) : ?>
        <option value="<?= $nomDesFamille["id"] ?>" selected="<?= $nomDesFamille["nom"] ?>"> <?= $nomDesFamille["nom"] ?></option>
    <?php else : ?>
        <option value="<?= $nomDesFamille["id"] ?>"><?= $nomDesFamille["nom"] ?></option>
    <?php endif ?>
<?php endforeach; ?>