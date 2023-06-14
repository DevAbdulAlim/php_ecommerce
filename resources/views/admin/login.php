<?php require_once 'includes/header.php' ?>
<main>
  <div id="custom-form" class="form-wrapper">
    <h1>Login Form</h1>

    <form method="post" action="">
      <div class="form_item">
        <input type="email" name="email" placeholder="Your Email" required />
      </div>
      <div class="form_item">
        <input
          type="password"
          name="password"
          placeholder="Your Password"
          required
        />
      </div>
      <div class="form_item"><input type="submit" value="Login" /></div>
    </form>
  </div>
</main>

<?php require_once 'includes/footer.php' ?>
