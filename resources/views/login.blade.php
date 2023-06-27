<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Admin Login</title>
      <link rel="stylesheet" href={{asset('assets/login/login.css')}}>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <script defer src={{asset('assets/login/login.js')}}></script>
      <!-- firebase -->
    <script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-database.js"></script>
   </head>
   <body>

      <div class="login-form-container">
         <div class="text">
            ADMIN
         </div>
         <div id="login-error-msg-holder">
          <p id="login-error-msg">Invalid username and/or password</p>
          </div>
         <form id="login-form">
            <div class="field">
               <div class="fas fa-envelope"></div>
               <input type="text" name="username" id="username" placeholder="Username">
            </div>
            <div class="field">
               <div class="fas fa-lock"></div>
               <input type="password" name="password" id="password" placeholder="Password">
            </div>
            <button id="submit" >LOGIN</button>
         </form>
         
      </div>
   </body>
</html>