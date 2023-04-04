<!DOCTYPE html>
<html>
<head>
	<title>GEES</title>
	<link rel="stylesheet" href="{{ asset('css/gees.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
    <div class="sidebar">
        <div class="logo">
          <img src="{{ asset('images/aces_logo.png') }}" alt="Logo">
        </div>
        <ul class="nav-links">
          <li><a href="#">Dashboard</a></li>
          <li><a href="#">Attendance</a></li>
          <li><a href="#">Transaction</a></li>
          <li><a href="#">Members</a></li>
          <li><a href="#">Fees</a></li>
          <li class="logout"><a href="{{ route('logout') }}">Log Out</a></li>
        </ul>
    </div>
    
    <div class="main-content">
	    <h1>ACES</h1>
	</div>

   
</body>
</html>
