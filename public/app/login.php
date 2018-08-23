
<?php include ('../../includes/layouts/header.php')?>
	<div id="wel">
	<h1>Welcome Back</h1>
	</div>
	<div id="login-bar">
		<div id="login-text">
			<p>Login</p>
		</div>
</div>
<div id="login-box">
	

<div class="login" id="login">
      
      <form method="post" action="">
        <p><input type="text" name="login" value="" placeholder="     Username / Email"></p>
        <p><input type="password" name="password" value="" placeholder="     Password"></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Remember me
          </label>
        </p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
 <div class="login-help">
      <p> <a href="#">Reset Password</a></p>
    </div>
      </form>
    </div>
    </div>
    <?php include ('../../includes/layouts/footer.php'); ?>