<?php $title_content = 'Contact - Envoyer un message à l\'auteur' ?>

<div id="contactView-main_container">
  <div id="background-contact">
    <!-- <img id="background_contact_img" src="public/images/fancy-pants.jpg" alt="Mosaïque de fond"> -->
  </div>
  
  <div id="container-contact">
  
    <div id="main-contact" class="text-center shadow border bg-white rounded container">
  
  
      <div class="shadow border p-3 mb-5 bg-white rounded container container-main-title_description col-8">
        <h1>CONTACT</h1>
      </div>
      <div id="text_contact">
          <p class="col-10 mx-auto"> Remplissez le formulaire ci-dessous pour envoyer un message à l'auteur.</p>
          <p class="regular-subtitle-text">Tous les champs sont obligatoires !</p>
      </div>
      <?php
  
      if ($_SESSION['contact_success'] == true) : ?>
        <div class="alert alert-success col-md-8 container text-center container_error" role="alert"><i class="fas fa-check"></i><?= $_SESSION['sending_success_message']; ?> </div>
        <?php $_SESSION['contact_success'] = false; ?>
      <?php endif; ?>
  
      <?php if (isset($_SESSION['contact_fail']) AND $_SESSION['contact_fail'] == true) : ?>
        <div class="alert alert-warning col-md-8 container container_error" role="alert"><?= $_SESSION['sending_fail_message']; ?> </div>
        <?php $_SESSION['contact_fail'] = false; ?>
      <?php endif; ?>
  
  
      <div id="container-form">
  
        <form action="<?= HOST . 'send-message'; ?>" id="form_container" class="col-md-10 container" method="POST">
          <div class="row">
            <div class="input-field col s6">
              <input id="first_name" name="first_name" type="text" class="validate" value="<?php if (isset($_SESSION['first_name'])) { echo $_SESSION['first_name']; } ?>" required>
              <?php if (empty($_SESSION['first_name'])) : ?>
                <label for="first_name">Prénom</label>
              <?php endif; ?>
            </div>
  
            <div class="input-field col s6">
              <input id="last_name" name="last_name" type="text" class="validate" value="<?php if (isset($_SESSION['last_name'])) { echo $_SESSION['last_name']; } ?>" required>
              <?php if (empty($_SESSION['last_name'])) : ?>
                <label for="last_name">Nom</label>
              <?php endif; ?>
            </div>
          </div>
  
          <div class="row">
            <div class="input-field col s12">
              <input id="email" name="email" type="email" class="validate" value="<?php if (isset($_SESSION['email'])) { echo $_SESSION['email']; } ?>" required>
              <?php if (empty($_SESSION['email'])) : ?>
                <label for="email">Email</label>
              <?php endif; ?>
            </div>
          </div>
  
          <div class="row">
            <div class="input-field col-10 container">
              <input id="message_subject" name="message_subject" type="text" class="validate" value="<?php if (isset($_SESSION['message_subject'])) { echo $_SESSION['message_subject']; } ?>" required>
              <?php if (empty($_SESSION['message_subject'])) : ?>
                <label for="message_subject">Sujet de votre message</label>
              <?php endif; ?>
            </div>
          </div>
  
          <div class="row">
            <div class="input-field col s12">
              <textarea id="textarea1" name="message_content" class="materialize-textarea" required><?php if (isset($_SESSION['message_content'])) { echo $_SESSION['message_content']; } ?></textarea>
              <label for="textarea1">Votre message</label>
            </div>
          </div>
          <input type="submit" id="submit_contact_btn" name="submit_contact_message" class="btn btn-info" value="Envoyer">
        </form>
  
      </div>
  
  
  
  
    </div>
  </div>



</div>
