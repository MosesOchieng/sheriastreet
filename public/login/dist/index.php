<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login/signup</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!-- tema buat papan login ber-animasi -->
    <main>
      <!-- section pertama -->
      <section class="slide slide-one">
        <div class="message message-one">
          <div class="message-caption">
            <h1>Sheria Street</h1>
            <p>Getting women comfortable at work.</p>
          </div>

          <button class="btn-enter">Sign in</button>
        </div>
        <div class="message message-two">
          <div class="message-caption">
            <h1>Sheria Street orgs.</h1>
            <p>Enter organisation details below.</p>
          </div>

          <button class="btn-enter">Sign up</button>
        </div>
      </section>

      <!-- section kedua -->
      <section class="form-page slide slide-two">
        <div class="form-container">
          <div class="form-wrapper form-wrapper-one">
            <section class="header">
              <h1>create a user account</h1>
              <nav>
                <a href="#" class="menu-item">
                  <!-- svg from fontawesome -->
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path
                      d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"
                    /></svg
                ></a>
                <a href="#" class="menu-item"
                  ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 488 512"
                  >
                    <path
                      d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"
                    /></svg
                ></a>
                <a href="#" class="menu-item"
                  ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512 512"
                  >
                    <path
                      d="M201.5 305.5c-13.8 0-24.9-11.1-24.9-24.6 0-13.8 11.1-24.9 24.9-24.9 13.6 0 24.6 11.1 24.6 24.9 0 13.6-11.1 24.6-24.6 24.6zM504 256c0 137-111 248-248 248S8 393 8 256 119 8 256 8s248 111 248 248zm-132.3-41.2c-9.4 0-17.7 3.9-23.8 10-22.4-15.5-52.6-25.5-86.1-26.6l17.4-78.3 55.4 12.5c0 13.6 11.1 24.6 24.6 24.6 13.8 0 24.9-11.3 24.9-24.9s-11.1-24.9-24.9-24.9c-9.7 0-18 5.8-22.1 13.8l-61.2-13.6c-3-.8-6.1 1.4-6.9 4.4l-19.1 86.4c-33.2 1.4-63.1 11.3-85.5 26.8-6.1-6.4-14.7-10.2-24.1-10.2-34.9 0-46.3 46.9-14.4 62.8-1.1 5-1.7 10.2-1.7 15.5 0 52.6 59.2 95.2 132 95.2 73.1 0 132.3-42.6 132.3-95.2 0-5.3-.6-10.8-1.9-15.8 31.3-16 19.8-62.5-14.9-62.5zM302.8 331c-18.2 18.2-76.1 17.9-93.6 0-2.2-2.2-6.1-2.2-8.3 0-2.5 2.5-2.5 6.4 0 8.6 22.8 22.8 87.3 22.8 110.2 0 2.5-2.2 2.5-6.1 0-8.6-2.2-2.2-6.1-2.2-8.3 0zm7.7-75c-13.6 0-24.6 11.1-24.6 24.9 0 13.6 11.1 24.6 24.6 24.6 13.8 0 24.9-11.1 24.9-24.6 0-13.8-11-24.9-24.9-24.9z"
                    /></svg
                ></a>
              </nav>
              <p>or use your email for registration</p>
            </section>

            <form class="input-group" action=" ../l/index.php" method="post">
              <div class="name-input input">
                <label>Name</label>
                <input type="text" />
              </div>
              <div class="email-input input">
                <label>Email</label>
                <input type="email" />
              </div>

              <div class="password-input input">
                <label>Password</label>
                <input type="password" />
              </div>
              <div class="h-captcha" data-sitekey="194e8efb-f32d-4d44-8ffb-b54694c2f321"></div>
              <div><input type="checkbox" id="vehicle1" name="vehicle1" value="sheria street">
      <label for="terms"> By checking the box you agree to the <a href="#"><span> terms and conditions</span></a> of the Sheria Street applicatin use.</label><br></div>
              <div class="button-input input">
                <button>Sign up</button>
              </div>
            </form>
          </div>
          <div class="form-wrapper form-wrapper-two form-wrapper-hidden" id="login">
            <section class="header">
              <h1>Login</h1>
              <nav>
                <a href="#" class="menu-item">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path
                      d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"
                    /></svg
                ></a>
                <a href="#" class="menu-item"
                  ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 488 512"
                  >
                    <path
                      d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"
                    /></svg
                ></a>
                <a href="#" class="menu-item"
                  ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512 512"
                  >
                    <path
                      d="M201.5 305.5c-13.8 0-24.9-11.1-24.9-24.6 0-13.8 11.1-24.9 24.9-24.9 13.6 0 24.6 11.1 24.6 24.9 0 13.6-11.1 24.6-24.6 24.6zM504 256c0 137-111 248-248 248S8 393 8 256 119 8 256 8s248 111 248 248zm-132.3-41.2c-9.4 0-17.7 3.9-23.8 10-22.4-15.5-52.6-25.5-86.1-26.6l17.4-78.3 55.4 12.5c0 13.6 11.1 24.6 24.6 24.6 13.8 0 24.9-11.3 24.9-24.9s-11.1-24.9-24.9-24.9c-9.7 0-18 5.8-22.1 13.8l-61.2-13.6c-3-.8-6.1 1.4-6.9 4.4l-19.1 86.4c-33.2 1.4-63.1 11.3-85.5 26.8-6.1-6.4-14.7-10.2-24.1-10.2-34.9 0-46.3 46.9-14.4 62.8-1.1 5-1.7 10.2-1.7 15.5 0 52.6 59.2 95.2 132 95.2 73.1 0 132.3-42.6 132.3-95.2 0-5.3-.6-10.8-1.9-15.8 31.3-16 19.8-62.5-14.9-62.5zM302.8 331c-18.2 18.2-76.1 17.9-93.6 0-2.2-2.2-6.1-2.2-8.3 0-2.5 2.5-2.5 6.4 0 8.6 22.8 22.8 87.3 22.8 110.2 0 2.5-2.2 2.5-6.1 0-8.6-2.2-2.2-6.1-2.2-8.3 0zm7.7-75c-13.6 0-24.6 11.1-24.6 24.9 0 13.6 11.1 24.6 24.6 24.6 13.8 0 24.9-11.1 24.9-24.6 0-13.8-11-24.9-24.9-24.9z"
                    /></svg
                ></a>
              </nav>
              <p>or use your email account</p>
            </section>

            <form class="input-group" action="connection.php" method="post">
              <div class="email-input input">
                <label>Email</label>
                <input type="email" />
              </div>
              <div class="email-input input">
                <label>Name of organisation</label>
                <input type="name" />
              </div>
              <div class="password-input input">
                <label>Password</label>
                <input type="password" />
              </div>
              
              <div class="h-captcha" data-sitekey="194e8efb-f32d-4d44-8ffb-b54694c2f321"></div>

              <div><input type="checkbox" id="vehicle1" name="vehicle1" value="sheria street">
  <label for="terms"> By checking the box you agree to the <a href="#"><span> terms and conditions</span></a> of the Sheria Street applicatin use.</label><br></div>
              <div class="forget-password-input input">
                <a href="" class="forget-link">forgot your password ?</a>
              </div>

              <div class="button-input input">
                <button>Sign in</button>
              </div>
            </form>
          </div>
        </div>
      </section>
    </main>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
