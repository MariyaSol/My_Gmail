<?php
session_start();
ini_set('display_errors',1);
error_reporting(E_ALL);


//echo "string1 ";

//require_once(__DIR__.'/views/signin.php');

//echo "string2 ";
//require_once(__DIR__.'/views/Registration.php');
//echo "string3 ";
require_once(__DIR__.'/components/Router.php');
//require_once(__DIR__.'/config/routes.php');
//echo "string11 ";
$router = new Router();
//echo "string12 ";
$router->run();
//header('Location: index.php/signin/form');
//die();
?>





























<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  	<link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<link rel="stylesheet" href="css/styleHome.css" media="screen" title="no title" charset="utf-8">

		<script src="js/ckeditor/ckeditor.js"></script>
		<script src="js/ckeditor/samples/sample.js"></script>
		<link rel="stylesheet" href="js//ckeditor/samples/sample.css">
</head>
<body>

<?php

//var_dump ($_GET);

//	index();
//	function	index(){
  /*  echo "string";

													switch($_GET["action"]){
														case "signup":{ //зарегиться
															echo register();
														}break;
														case "recovery":{

														}break;
														case "signin":{  //зайти в систему
															echo signinController();

														}break;
														case "home":{  //зайти в систему

														}break;
														default:{

																echo enter();
														}
													}*/

											//	}

?>
</body>
</html>
