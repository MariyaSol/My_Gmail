<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  	<link rel="stylesheet" href="../../css/style.css" media="screen" title="no title" charset="utf-8">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<link rel="stylesheet" href="../../css/styleHome.css" media="screen" title="no title" charset="utf-8">

		<script src="../../js/ckeditor/ckeditor.js"></script>
		<script src="../../js/ckeditor/samples/sample.js"></script>
		<link rel="stylesheet" href="../../js/ckeditor/samples/sample.css">
</head>
<body>




<?php
class Register
{

      public function Register($model)
      {
        echo <<<END




        <div id="login-form">
            <h1>Регистрация</h1>

            <fieldset class="REGISTRATION">
                <form action="data" method="post">
                    <input type="email" name="login"  placeholder="Login">
                    <input type="password"  name="password" placeholder="Password">
                    <input type="text" name="name"  placeholder="Name">
                    <input type="text"  name="lname" placeholder="Last name">
                    <input type="text" name="surname"  placeholder="Surname">


<p>$model</p>
                    <input type="submit" value="РЕГИСТРАЦИЯ" id="Subreg">
                    <footer class="clearfix">


                    </footer>
                </form>
            </fieldset>

        </div>





END;

      }
}



?>

</body>
</html>
