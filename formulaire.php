<?php

require_once __DIR__ . "/templates/header.php"

?>

<div class="container py-3">
    <form action="#">
        <div class="mb-3">
            <label class="form-label" for="name">Nom</label>
            <input class="form-control" type="text" name="name" id="name" required="required">
        </div>
        <div class="mb-3">
            <label class="form-label" for="firstname">Prenom</label>
            <input class="form-control" type="text" name="firstname" id="firstname" required="required">
        </div>
        <div class="mb-3">
            <label class="form-label" for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email" required="required">
        </div>
        <div class="mb-3">
            <label class="form-label" for="phone">Numéro de téléphone</label>
            <input class="form-control" type="text" name="phone" id="phone" required="required">
        </div>
        <div class="mb-3">
            <label class="form-label" for="message">Votre Message</label>
            <textarea class="form-control" name="message" id="message" cols="30" rows="10" required="required"></textarea>
        </div>
        <div class="mb-3">
            <button class="btn btn-danger" type="submit">Envoyer</button>
        </div>
    </form>
</div>


<?php

require_once __DIR__ . "/templates/footer.php"

?>