<?php
require_once "templates/header.php";
?>

<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Binvenue au Garage <span>V.Parrot</span></h1>
        <p class="col-lg-10 fs-4"></p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Adresse Mail</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Mot de passe</label>
          </div>
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Se souvenir
            </label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">S'inscrire</button>
          <hr class="my-4">
          <small class="text-body-secondary">En cliquant sur S'inscrire, vous acceptez les conditions d'utilisation.</small>
        </form>
      </div>
    </div>
  </div>

<?php
require_once "templates/footer.php";
?>
