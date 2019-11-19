<?php

// Chargement des classes
require_once(MODEL.'/PostManager.php');

function showMainIndex()
{
    require(VIEW.'main.php');
}

function showAboutView() {
    require(VIEW.'aboutView.php');
}

function showCommentView() {
    require(VIEW.'postView.php');
}

function showConnexionView() 
{
    require(VIEW.'connexionView.php');
}

function showEditCommentView()
{
    require(VIEW.'editComment.php');
}