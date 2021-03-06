<div class="login-container">
  <div class='login-header'>
    <h1>Welcome!</h1>
    <p>Create new account</p>
  </div>
  <form method='POST' action='../src/signup.php'>
    <div class='form-group'>
      <label for='firstname'>First name</label>
      <input type='text' name='firstname' id='firstname' required>
    </div>
    <div class='form-group'>
      <label for='lastname'>Last name</label>
      <input type='text' name='lastname' id='lastname' required>
    </div>
    <div class='form-group'>
      <label for='email'>Email</label>
      <input type='email' name='email' id='email' required>
    </div>
    <div class='form-group'>
      <label for='password'>Password</label>
      <input type='password' name='password' id='password' required>
    </div>
    <div class='form-group' id='buttons'>
      <button type='submit' name='signup'>Sign up</button>
      <a href='#'>Forgot password?</a>
    </div>
  </form>
</div>