<?php
require 'controllers/signupController.php';
function register(){
echo <<<END
<div id="login-form">
    <h1>Регистрация</h1>

    <fieldset class="REGISTRATION">
        <form action="controllers/signupController.php" method="post">
            <input type="email" name="login"  placeholder="Login">
            <input type="password"  name="password" placeholder="Password">
            <input type="text" name="name"  placeholder="Name">
            <input type="text"  name="lname" placeholder="Last name">
            <input type="text" name="surname"  placeholder="Surname">



            <input type="submit" value="РЕГИСТРАЦИЯ" id="Subreg">
            <footer class="clearfix">


            </footer>
        </form>
    </fieldset>

</div>

END;
}
?>
