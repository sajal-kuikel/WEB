<?php

require 'loadTemplate.php';
require $_GET['page'].'.php';
// require $_GET['person'];


$templateVars =[
    'title' => $title,
    'content' => $content,
    // 'person' =>$_GET['person'],
];

echo loadTemplate('layout.php', $templateVars);

?>