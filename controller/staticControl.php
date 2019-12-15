<?php



class StaticControl
{


    public function showMain()
    {
        $viewToDisplay = new ViewRenderer('main');
        $viewToDisplay->renderView();
    }


    public function showAbout()
    {
        $viewToDisplay = new ViewRenderer('aboutView');
        $viewToDisplay->renderView();
    }


    public function showContact()
    {
        $viewToDisplay = new ViewRenderer('contactView');
        $viewToDisplay->renderView();
    }


    public function showConnexion()
    {
        $viewToDisplay = new ViewRenderer('connexionView');
        $viewToDisplay->renderView();
    }

    public function showCreateChapter()
    {
        
        $viewToDisplay = new ViewRenderer('createPostView');
        $viewToDisplay->renderView();
    }
    
    public function showContactView()
    {
        $viewToDisplay = new ViewRenderer('contactView');
        $viewToDisplay->renderView();
    }

    public function sendMessage()
    {

        $_SESSION['contact_success'] = false;

        if (isset($_POST['submit_contact_message']))
        {
            if (isset($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['message_subject'], $_POST['message_content']))
            {
                if (strlen($_POST['first_name']) < 255 && strlen($_POST['last_name']) < 255)
                {
                    if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email']))
                    {
                        if (strlen($_POST['message_subject']) < 150)
                        {                            
                                
                                $firstName = trim($_POST['first_name']);
                                $firstName = stripslashes($_POST['first_name']);
                                $firstName = htmlspecialchars($_POST['first_name']);
                                
                                $lastName = trim($_POST['first_name']);
                                $lastName = stripslashes($_POST['first_name']);
                                $lastName = htmlspecialchars($_POST['last_name']);
                                
                                $mail = $_POST['email'];

                                $messageSubject = trim($_POST['message_subject']);
                                $messageSubject = stripslashes($_POST['message_subject']);
                                $messageSubject = htmlspecialchars($_POST['message_subject']);
                                
                                $sentMessage = trim($_POST['message_content']);
                                $sentMessage = stripslashes($_POST['message_content']);
                                $sentMessage = htmlspecialchars($_POST['message_content']);

                                $send = mail('hekki_nox06@gmail.com', $messageSubject, $sentMessage);

                                $_SESSION['contact_success'] = true;
                                $_SESSION['sending_success_message'] = 'Votre message a bien été envoyé !';

                                $viewToDisplay = new ViewRenderer('contactView');
                                $viewToDisplay->renderView();
                          

                        } else {
                            $_SESSION['contact_fail'] = true;
                            header('Location: ' . HOST . 'contact');
                            $_SESSION['sending_fail_message'] = 'Le sujet doit faire moins de 150 caractères';
                            exit();
                        }
                    } else {
                        $_SESSION['contact_fail'] = true;
                        header('Location: ' . HOST . 'contact');
                        $_SESSION['sending_fail_message'] = 'L\'adresse email n\'est pas valide.';
                        exit();
                    }

                } else {
                    $_SESSION['contact_fail'] = true;
                    header('Location: ' . HOST . 'contact');
                    $_SESSION['sending_fail_message'] = 'Le nom et le prénom doivent faire moins de 255 caractères.';
                    exit();
                }
            } else {
                $_SESSION['contact_fail'] = true;
                header('Location: ' . HOST . 'contact');
                $_SESSION['sending_fail_message'] = 'Vous devez saisir un Nom, un Prénom, une adresse email, un sujet et un contenu à votre message.';
                exit();
            }
        } else {
            header('Location: ' . HOST . 'contact');
        }
    }

}