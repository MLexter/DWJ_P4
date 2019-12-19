<?php $title_content = 'Contact - Envoyer un message à l\'auteur' ?>


<div id="main-contact" class="d-flex align-items-center">

  <div class="text-center shadow-lg p-3 mb-5 bg-white rounded container-main-title_description">
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
            <input id="first_name" name="first_name" type="text" class="validate"  value="<?= @$_SESSION['first_name'] ?>" required>
            <?php if (empty($_SESSION['first_name'])) : ?>
            <label for="first_name" class="text-center">Prénom</label>
            <?php endif; ?>
          </div>

          <div class="input-field col s6">
            <input id="last_name" name="last_name" type="text" class="validate"  value="<?= @$_SESSION['last_name'] ?>" required>
            <?php if (empty($_SESSION['last_name'])) : ?>
            <label for="last_name" class="text-center">Nom</label>
            <?php endif; ?>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <input id="email" name="email" type="email" class="validate"  value="<?= @$_SESSION['email'] ?>" required>
            <?php if (empty($_SESSION['email'])) : ?>
            <label for="email" class="text-center">Email</label>
            <?php endif; ?>
          </div>
        </div>

        <div class="row">
          <div class="input-field col-6 container">
              <input id="message_subject" name="message_subject" type="text" class="validate"  value="<?= @$_SESSION['message_subject'] ?>" required>
              <?php if (empty($_SESSION['message_subject'])) : ?>
              <label for="message_subject" class="text-center">Sujet de votre message</label>
              <?php endif; ?>
          </div>
        </div>

        
        <div class="row">
          <div class="input-field col s12">
            <textarea id="textarea1" name="message_content" class="materialize-textarea" required><?= @$_SESSION['message_content'] ?></textarea>
            <label for="textarea1" class="text-center">Votre message</label>
          </div>
        </div>
        <input type="submit" name="submit_contact_message" value="Envoyer">
      </form>
    </div>


  </div>


</div>