<div class="login-container">
  <div class='login-header'>
    <h1>Welcome back!</h1>
    <p>Please login to continue.</p>
  </div>
  <form method='POST' action='../src/signup.php'>
    <div class='form-group'>
      <label for='email'>Email</label>
      <input type='email' name='email' id='email' required>
    </div>
    <div class='form-group'>
      <label for='password'>Password</label>
      <input type='password' name='password' id='password' required>
    </div>
    <div class='form-group' id='buttons'>
      <button type='submit' name='login'>Login</button>
      <a href='#'>Forgot password?</a>
    </div>
  </form>
</div>