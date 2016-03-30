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
<?php enter(); ?>
</body>
</html>


<?php
function enter()
{
echo <<<END
   <div id="login-form">
      <h1>Авторизация</h1>
      <fieldset>
          <form action="../signin/data" method="post">
              <input type="email" name="login" placeholder="Login">
              <input type="password" name="pass" placeholder="Password">
              <input type="submit" value="ВОЙТИ" >
          </form>
          <form action="../signup/form" method="post">
              <input type="submit" value="РЕГИСТРАЦИЯ" id="lol">
          </form>
              <footer class="clearfix">
                  <p><span class="info">?</span><a href="ResetParol.html">Забыли пароль?</a></p>
              </footer>
      </fieldset>
  </div>
END;
}
?>
