<div class="header">
  <div class="header-inner">
    <a href="<?php echo BASE_URL; ?>" class="logo">Candle Shop</a>
    <div class="basket-login">
      <a class='nav-item' id="theme-switch"></a>
      <!--if logged in show username-->
      <?php if (isset($_SESSION['uid'])) { ?>
        <p class='nav-item' id='firstname'><?php echo $_SESSION[
          'firstname'
        ]; ?></p>
        <a class='nav-item' href='<?php echo BASE_URL .
          'logout'; ?>' id="signup">Logout</a>
      <?php } else { ?>
      <a class='nav-item' href='<?php echo BASE_URL .
        '/login'; ?>' id="login">Login</a>
      <a class='nav-item' href='<?php echo BASE_URL .
        '/signup'; ?>' id="signup">Sign Up</a>
      <?php } ?>
      <a class='nav-item' id="basket"><i class="ri-shopping-basket-2-line"></i>&nbsp;<p>0</p></a>
    </div>
  </div>
  <script src='<?php echo BASE_URL; ?>/public/src/theme_switch.js'></script>
</div>