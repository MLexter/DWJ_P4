<?php $title_content = 'Contact - Envoyer un message à l\'auteur' ?>


<div id="main-contact" class="d-flex align-items-center">

<div " class="container">
    <h2 class="text-center">Envoyer un message à l'auteur</h2>
    <p class="text-center">Une question ? Une idée ? Une remarque ? Faites parvenir un message à l'auteur !</p>
    <br />
    <p class="text-center">Remplissez le formulaire ci-dessous pour envoyer un message à Jean Forteroche.</p>
    <br />

    <div class="row">
        <form id="form_container" class="col s12">
          <div class="row">
            <div class="input-field col s6">
              <input placeholder="Placeholder" id="first_name" type="text" class="validate">
              <label for="first_name">Prénom</label>
            </div>
            <div class="input-field col s6">
              <input id="last_name" type="text" class="validate">
              <label for="last_name">Nom</label>
            </div>
          </div>
          
          <div class="row">
            <div class="input-field col s12">
              <input id="email" type="email" class="validate">
              <label for="email">Email</label>
            </div>
          </div>
    
          <div class="row">
            <div class="input-field col s12">
              <textarea id="textarea1" class="materialize-textarea"></textarea>
              <label for="textarea1">Votre message</label>
            </div>
          </div>
        <input type="submit" name="submit_contact_message" value="Envoyer">
    </form>
</div>


</div>


</div>

