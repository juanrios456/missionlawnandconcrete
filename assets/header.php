<head>
    <link rel="stylesheet" href="assets/css/header.css" type="text/css" >
    <link rel="stylesheet" href="assets/css/all.css" type="text/css" >
</head>
<nav>
    <div class="topnav" id="myTopnav">
      <a href="index.php" id="logo">
        <img  src="images/logo.png" alt="logo" style="width:70px; height:70px;" />
      </a>
      <a href="contact.php" class="nav-items" id="nav-1">Contact</a>
      <a href="concrete.php" class="nav-items">Concrete</a>
      <a href="lawn.php" class="nav-items">Lawn & Maintenance</a>
      <a href="landscape.php" class="nav-items" >Landscaping</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <img id="nav-hamburger" src="assets/hamburger.png"  style="width:30px; height:30px;" alt="nav-dropdown"/>
      </a>
  </div>
</nav>  
  <script>
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
  </script>  
