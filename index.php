<?php
	session_start();

	include "views/signin.php";
	include "views/Registration.php";
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
//	if(isset($_SESSION["auth"])){//если пользователь на сайте
var_dump ($_GET);
//	}else{
		if(!empty($_GET["section"]) && !empty($_GET["action"])){
			switch($_GET["section"]){

				case "user":{
													switch($_GET["action"]){
														case "signup":{ //зарегиться
															echo register();
														}break;
														case "recovery":{
															//echo passwordRecovery();

															//$user = new User($f);
															//$user->login =
															//$user->save();
														}break;
														case "signin":{  //зайти в систему
															echo signinController();
															//echo signInForm();

															//$user = new User($f);
															//$user->login =
															//$user->password =
															//if($user->check())
														}break;
														case "home":{  //зайти в систему

														}break;
														default:{
																echo signin();
														}
													}
				}break;
				default:{
					echo signin();
				}
			}
		}else {
			echo signin();
		}
//	}


?>
<!-- content -->


</body>
</html>
