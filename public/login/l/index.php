<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>login</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<form class="container" action="authentication.php" method="post"  onsubmit = "return validation()" onsubmit="onSubmit(event)" novalidate>
  <div>
    <h3>Welcome Back</h3>
    <div class='greeting'>Sheria Street community is super excited you are here.</div>
  </div>
  <div>
    <div>
      <label for='username' minlength="4">Username or Email</label>
      <span class="error"  aria-live="polite"></span>
    </div>
    <input id='username' type="text" name="username" required />
  </div>
  <div>
    <div>
      <label for='password'>Password</label>
      <span class="error" aria-live="polite"></span>
    </div>
    <input id='password'name="pass" type='password' required minlength="8" />
    <br>
    <div>
      <label for='location' minlength="4">Location</label>
      <span class="error"  aria-live="polite"></span>
    </div>
    <input id='username' type="text" name="location" required />
  </div>
    <a href='#'>Forgot your password?</a>
  </div>
  <button type="submit" name="submit">
    Login
  </button>
  <span aria-live="assertive" id="js-loadingMsg" class="sr-only">
     <!-- Use JavaScript to inject the the loading message -->
  </span>
</form>

<details class="container pen-description">
  <summary>User Login queries</summary>
  <p>Having difficulties logging in or signing up send us an email or contacts us.</p>

  <ul>
    <li>Sheriastreet@proton.me</li>
    <li>0745 09 2523</li>

  </ul>
</details>
<!-- partial -->
  <script  src="./script.js"></script>
</body>
</html>
