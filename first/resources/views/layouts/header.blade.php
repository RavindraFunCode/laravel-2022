<!DOCTYPE html>
<html>
<head>
@stack('title')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="#home" class="w3-bar-item w3-button">Gourmet au Catering</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="{{url('/')}}" class="w3-bar-item w3-button">Home</a>
      <a href="{{route('user.form')}}" class="w3-bar-item w3-button">User Form</a>
      <a href="{{route('user.list')}}" class="w3-bar-item w3-button">User List</a>
      <a href="{{route('user.list.trash')}}" class="w3-bar-item w3-button">User Trash List</a>
      <!-- <a href="{{url('/')}}" class="w3-bar-item w3-button">Home</a>
      <a href="{{url('/user-form')}}" class="w3-bar-item w3-button">User Form</a>
      <a href="{{url('/user-list')}}" class="w3-bar-item w3-button">User List</a> -->
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
  <img class="w3-image" src="/w3images/hamburger.jpg" alt="Hamburger Catering" width="1600" height="800">
  <div class="w3-display-bottomleft w3-padding-large w3-opacity">
    <h1 class="w3-xxlarge">Le Catering</h1>
  </div>
</header>

<br>
<br>
<br>
<br>