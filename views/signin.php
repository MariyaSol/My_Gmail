<?php
function enter()
{
echo <<<END
   <div id="login-form">
      <h1>Авторизация</h1>
      <fieldset>
          <form action="index.php" method="post">
              <input type="email" placeholder="Login">
              <input type="password" placeholder="Password">
              <input type="submit" value="ВОЙТИ" >
          </form>
          <form action="index.php?action=signup" method="post">
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
