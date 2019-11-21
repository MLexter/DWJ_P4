<!-- <?php
require('PostsControl.php');

if (!empty($_POST['author_post_title'] ) OR (!empty($_POST['author_post_content'])))
{

        $newTitleContent = htmlspecialchars($_POST['author_post_title']);

        $newTextContent = htmlspecialchars($_POST['author_post_content']);

        $insertContent = new \JForteroche\Blog\Model\PostsManager();
        $insertContent->updatePost($_GET['id'], $newTitleContent, $newTextContent);
}
header('Location:' . HOST . 'readBook&id=' . $_GET['id']); -->