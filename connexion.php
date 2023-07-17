<?php

require_once __DIR__ . "/templates/header.php"

?>

<div class="col-md-10 mx-auto col-lg-5">
    <h1 class="text-center py-2">Connexion <br> Administrateur & Employé</h1>
    <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required="required">
            <label for="floatingInput">Adresse Mail</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required="required">
            <label for="floatingPassword">Mot de passe</label>
        </div>
            <button class="w-100 btn btn-lg btn-danger" type="submit">Connexion</button>
            <hr class="my-4">
    </form>
</div>
