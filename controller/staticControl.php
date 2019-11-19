<?php

// Chargement des classes
require_once('model/PostManager.php');

function showMainIndex()
{
    require('view/main.php');
}

function showAboutView() {
    require('view/aboutView.php');
}

function showCommentView() {
    require('view/postView.php');
}

function showConnexionView() 
{
    require('view/connexionView.php');
}

function showEditCommentView()
{
    require('view/editComment.php');
}