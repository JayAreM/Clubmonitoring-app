<!DOCTYPE html>
<html>
<head>
  <title>Club Monitoring System</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="header">Club Monitoring System</h1>
        <button class="modal-btn btn1">GEES</button>
        <button class="modal-btn btn2">LISCO</button>
        <br>
        <button class="modal-btn btn3">ACES</button>
        <button class="modal-btn btn4">CETSO</button>
        <br>
        <button class="modal-btn btn5">ITS</button>
      </div>
      
      <div id="modal" class="modal">
        <div class="modal-content">
          <span class="close-btn">&times;</span>
          <h2>Log in</h2>
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <label for="username">Username:</label>
            <input type="text" id="username" name="username"><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password"><br><br>
            <button type="submit" class="login-btn" >Sign In</button>

            <a href="#" class="forgot-password">Forgot password?</a>
            

            </form>



        </div>


        
      </div>
      
  <script src="{{ asset('js/script.js') }}"></script>

     


</body>
</html>
