<div class="admin-auth">
  <div class="admin-auth__panel">
    <img src="/assets/images/Mfunl-logo-blue.png" width="160" height="58" alt="MfunL Logo" title="MfunL Logo">
    <h1>Admin Login</h1>
    <form method="post" action="/admin/login/">
      <?= \App\Core\Csrf::field() ?>
      <label>Email<input type="email" name="email" required autofocus></label>
      <label>Password<input type="password" name="password" required></label>
      <button type="submit" class="btn btn--accent btn--block">Sign In</button>
    </form>
  </div>
</div>
