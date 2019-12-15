<?php $title_content = 'Contact - Envoyer un message à l\'auteur' ?>


<div id="main-contact" class="d-flex align-items-center">

  <div class="container text-center">
    <h1>Envoyer un message à l'auteur</h1>
    <p>Une question ? Une idée ? Une remarque ? Faites parvenir un message à l'auteur !
      <br />
      Remplissez le formulaire ci-dessous pour envoyer un message à Jean Forteroche.</p>
    <br />
    <p>Tous les champs sont obligatoires !</p>

    <?php 

    if (@$_SESSION['contact_success'] == true) : ?>
        <div class="alert alert-success container text-center" role="alert"><i class="fas fa-check"></i><?= @$_SESSION['sending_success_message']; ?> </div>
        <?php @$_SESSION['contact_success'] = false; ?>
    <?php endif; ?>

    <?php if (@$_SESSION['contact_fail'] == true) : ?>
        <div class="alert alert-warning" role="alert"><?= @$_SESSION['sending_fail_message']; ?> </div>
        <?php $_SESSION['contact_fail'] = false; ?>
    <?php endif; ?>


    <div class="row">
      <form action="<?= HOST . 'send-message'; ?>" id="form_container" class="col s12" method="POST">

        <div class="row">
          <div class="input-field col s6">
            <input id="first_name" name="first_name" type="text" class="validate" required>
            <label for="first_name" class="text-center">Prénom</label>
          </div>

          <div class="input-field col s6">
            <input id="last_name" name="last_name" type="text" class="validate" required>
            <label for="last_name" class="text-center">Nom</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <input id="email" name="email" type="email" class="validate" required>
            <label for="email" class="text-center">Email</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col-6 container">
              <input id="message_subject" name="message_subject" type="text" class="validate" required>
              <label for="message_subject" class="text-center">Sujet de votre message</label>
          </div>
        </div>

        
        <div class="row">
          <div class="input-field col s12">
            <textarea id="textarea1" name="message_content" class="materialize-textarea" required></textarea>
            <label for="textarea1" class="text-center">Votre message</label>
          </div>
        </div>
        <input type="submit" name="submit_contact_message" value="Envoyer">
      </form>
    </div>


  </div>


</div>