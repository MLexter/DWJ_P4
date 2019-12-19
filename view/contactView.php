<?php $title_content = 'Contact - Envoyer un message à l\'auteur' ?>

<div id="background-contact">
  <img id="background_contact_img" src="public/images/alaska-road-mountains.jpg" alt="">
</div>

<div id="container-contact">

  <div id="main-contact" class="text-center shadow border bg-white rounded container">



    <div class="shadow border p-3 mb-5 bg-white rounded container container-main-title_description col-8">
      <h1>CONTACT</h1>
    </div>
    <div id="text_contact">
        <p> Remplissez le formulaire ci-dessous pour envoyer un message à Jean Forteroche.</p>
        <p>Tous les champs sont obligatoires !</p>
    </div>
    <?php

    if (@$_SESSION['contact_success'] == true) : ?>
      <div class="alert alert-success col-md-8 container text-center container_error" role="alert"><i class="fas fa-check"></i><?= @$_SESSION['sending_success_message']; ?> </div>
      <?php @$_SESSION['contact_success'] = false; ?>
    <?php endif; ?>

    <?php if (@$_SESSION['contact_fail'] == true) : ?>
      <div class="alert alert-warning col-md-8 container container_error" role="alert"><?= @$_SESSION['sending_fail_message']; ?> </div>
      <?php $_SESSION['contact_fail'] = false; ?>
    <?php endif; ?>


    <div id="container-form" class="row">

      <form action="<?= HOST . 'send-message'; ?>" id="form_container" class="col-md-8 container" method="POST">
        <h2 id="title-form" class="text-center">FORMULAIRE DE CONTACT</h2>
        <div class="row">
          <div class="input-field col s6">
            <input id="first_name" name="first_name" type="text" class="validate" value="<?= @$_SESSION['first_name'] ?>" required>
            <?php if (empty($_SESSION['first_name'])) : ?>
              <label for="first_name" class="text-center">Prénom</label>
            <?php endif; ?>
          </div>

          <div class="input-field col s6">
            <input id="last_name" name="last_name" type="text" class="validate" value="<?= @$_SESSION['last_name'] ?>" required>
            <?php if (empty($_SESSION['last_name'])) : ?>
              <label for="last_name" class="text-center">Nom</label>
            <?php endif; ?>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <input id="email" name="email" type="email" class="validate" value="<?= @$_SESSION['email'] ?>" required>
            <?php if (empty($_SESSION['email'])) : ?>
              <label for="email" class="text-center">Email</label>
            <?php endif; ?>
          </div>
        </div>

        <div class="row">
          <div class="input-field col-6 container">
            <input id="message_subject" name="message_subject" type="text" class="validate" value="<?= @$_SESSION['message_subject'] ?>" required>
            <?php if (empty($_SESSION['message_subject'])) : ?>
              <label for="message_subject" class="text-center">Sujet de votre message</label>
            <?php endif; ?>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <textarea id="textarea1" name="message_content" class="materialize-textarea text-center" required><?= @$_SESSION['message_content'] ?></textarea>
            <label for="textarea1" class="text-center">Votre message</label>
          </div>
        </div>
        <input type="submit" id="submit_contact_btn" name="submit_contact_message" class="btn btn-info" value="Envoyer">
      </form>

    </div>




  </div>
</div>