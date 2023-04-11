<?php
include_once('blog/posts/' . $cat . '.php');


echo '<div id="sessao-postagem">';

echo '<h1>' . $posts[$post - 1]['titulo'] . '</h1> <br>';
echo $posts[$post - 1]['texto'];

echo '</div>';
