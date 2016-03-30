<!DOCTYPE html>
<html lang="de-de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
      <?php if($title) {
        echo $title . ' ›';
      }
      ?>
      Guave Blocks
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/prism.css">
    <link rel="stylesheet" href="assets/css/guaveblocks.css">
    <link rel="stylesheet" href="assets/css/default.css">
		<script src='assets/cfn.js'></script>
		<script>
			window.onload = function() {
			  new CFN({src: "assets/squeaky-toy.mp3"});
			}
		</script>
  </head>
  <body>
  <?php
    include_once('navigation.php');
  ?>
