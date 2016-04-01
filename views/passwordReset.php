<?php

class Resetpass
{



public function Resetpass($model){
echo <<< END

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
<div id="login-form">
    <h1>Восстановить</h1>

    <fieldset class="REGISTRATION">
        <form action="../resetpassword/data" method="post">
            <input type="email" name="login" placeholder="Login">
            <input type="password" name="password" placeholder="Password">
            <input type="password" placeholder="Repeat Password">
            <input type="submit" value="ВОССТАНОВИТЬ" id="PASSRES">
            <footer class="clearfix">
            <p>$model</p>

            </footer>
        </form>
    </fieldset>

</div>
</body>
</html>
END;
}
}
?>
