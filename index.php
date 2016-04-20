<?php
   $NAME = empty($_GET['name']) ? "flatly"  : $_GET['name'];
   $TMPL = "_tmpl/" . (empty($_GET['tmpl']) ? "default" : $_GET['tmpl']) . ".html";
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootswatch: <?=$NAME?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="./<?=$NAME?>/stylesheets/styles.css" media="screen">
    <link rel="stylesheet" href="./_customs/styles.css" media="screen">
  </head>
  <body>
    <?php include($TMPL);?>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="./_custom.js"></script>
  </body>
</html>

