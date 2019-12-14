<?php $title_content = 'Contact - Envoyer un message à l\'auteur' ?>


<div id="main-contact" class="d-flex align-items-center">

  <div class="container text-center">
    <h1>Envoyer un message à l'auteur</h1>
    <p>Une question ? Une idée ? Une remarque ? Faites parvenir un message à l'auteur !
      <br />
      Remplissez le formulaire ci-dessous pour envoyer un message à Jean Forteroche.</p>
    <br />
    <p>Tous les champs sont obligatoires !</p>

    <div class="row">
      <form action="<?= HOST . 'send-message'; ?>" id="form_container" class="col s12" method="POST">
        <div class="row">
          <div class="input-field col s6">
            <input id="first_name" name="first_name" type="text" class="validate">
            <label for="first_name">Prénom</label>
          </div>
          <div class="input-field col s6">
            <input id="last_name" name="last_name" type="text" class="validate">
            <label for="last_name">Nom</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <input id="email" name="email" type="email" class="validate">
            <label for="email">Email</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <select>
              <option value="" disabled selected>Choisissez une option:</option>
              <option value="1">'Billet simple pour l'Alaska'</option>
              <option value="2">A propos d'un autre livre</option>
              <option value="3">Autre</option>
            </select>
            <label for="subject-message">Sujet de votre message :</label>
          </div>
        </div>

        
        <div class="row">
          <div class="input-field col s12">
            <textarea id="textarea1" name="message_content" class="materialize-textarea"></textarea>
            <label for="textarea1">Votre message</label>
          </div>
        </div>
        <input type="submit" name="submit_contact_message" value="Envoyer">
      </form>
    </div>


  </div>


</div>