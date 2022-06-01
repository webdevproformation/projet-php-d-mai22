<h1><?= $titre ?></h1>
<p><?= $description ?></p>
<form method="POST">
    <?= $form->inputText("nom" , "saisir votre nom") ?>
    <?= $form->inputEmail("email" , "saisir votre email") ?>
    <?= $form->textarea("commentaire" , "saisir votre commentaire") ?>
    <?= $form->submit("btn-success btn-sm") ?>
</form>