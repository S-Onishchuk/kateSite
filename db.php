<?php

$dbhost = "localhost";
$dbname = "kate";
$username = "root";
$password = "";

$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

// get all img for intro
function get_intro_all()
{
    global $db;
    $intro = $db->query("SELECT * FROM intro");
    return $intro;
}

// get all demo page cakes
function get_cakes_all()
{
    global $db;
    $cakes = $db->query("SELECT * FROM cakes");
    return $cakes;
}

// get whole page cake to use id
function get_cake_by_id($id)
{
    global $db;
    $cakes = $db->query("SELECT * FROM cakes WHERE id = $id");
    foreach ($cakes as $cake) {
        return $cake;
    }
}

// get foto for gallery
function get_gallery_all()
{
    global $db;
    $imgs = $db->query("SELECT * FROM gallery");
    return $imgs;
}

//get all reviews
function get_review_all()
{
    global $db;
    $reviews = $db->query("SELECT * FROM reviews");
    return $reviews;
}

// upgrade views
function update_views($id)
{
    global $db;
    $db->query("UPDATE cakes SET view = view + 1 WHERE id = $id");
}

// count columns
function pages()
{
    global $db;
    $pages = $db->query("SELECT COUNT(*) FROM cakes");
    $pages->execute();
    $total = $pages->fetch(PDO::FETCH_ASSOC);
    return $total;
}
