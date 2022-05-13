<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PIER 24 Photography</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="icon" type="image/x-icon" href="https://pier24.org/pilarafoundation/wp-content/themes/p24/images/logo.svg">
	 <link rel="stylesheet" href="photo.css">
  
  </head>
<body class="w3-light-grey w3-mobile">



<!-- Top menu on small screens -->
<header class=" w3-top  w3-xlarge w3-padding-16" style="background-color:black;" >
  <span class="w3-left w3-padding" style="font-family: Arial;font-size: 170%;color:white">Photos</span>
  <p ><img style=" float: left;" src="https://pier24.org/pilarafoundation/wp-content/themes/p24/images/logo.svg" alt="#" width="110"  height="100"/><ul>
  <li><a href="#home" onclick=" home()">Home</a></li>
  <li><a href="#news" onclick=" about()">About</a></li>
  <li><a href="#contact" onclick=" photo()">Photos</a></li>
  <li><a href="#about" onclick="visit()">Visit Us</a></li>
</ul></p>
</header>
  
<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content" style="max-width:1600px;margin-top:83px">
  
  <!-- Photo grid -->
  <div class="w3-row w3-grayscale-min">
    <div class="w3-quarter">
      <img src="https://pier24.org/pilarafoundation/wp-content/uploads/2018/04/VANA.001.jpg" style="width:100%"  alt="Canoeing again">
      <img src="https://pier24.org/pilarafoundation/wp-content/uploads/2015/09/WING.003.jpg" style="width:100%"  alt="Quiet day at the beach. Cold, but beautiful">
      <img src="https://pier24.org/pilarafoundation/wp-content/uploads/2015/08/VISR.001.jpg" style="width:100%"  alt="The Beach. Me. Alone. Beautiful">
   </div>
    
   <div class="w3-quarter">
      <img src="https://pier24.org/pilarafoundation/wp-content/uploads/2015/08/AITD.001.jpg" style="width:100%" onclick="onClick(this)" alt="A girl, and a train passing">
      <img src="https://pier24.org/pilarafoundation/wp-content/uploads/2018/06/FRAL.001.jpg" style="width:100%" onclick="onClick(this)" alt="Waiting for the bus in the desert">
      <img src="https://pier24.org/pilarafoundation/wp-content/uploads/2015/09/ADAR.002.jpg" style="width:100%" onclick="onClick(this)" alt="Nature again.. At its finest!">
    </div>
    
    <div class="w3-quarter">
      <img src="https://pier24.org/pilarafoundation/wp-content/uploads/2015/08/WOLD.001.jpg" style="width:100%" onclick="onClick(this)" alt="Waiting for the bus in the desert">
      <img src="https://pier24.org/pilarafoundation/wp-content/uploads/2018/06/FRAL.002.jpg" style="width:100%" onclick="onClick(this)" alt="What a beautiful scenery this sunset">
      <img src="https://pier24.org/pilarafoundation/wp-content/uploads/2015/09/WING.040-023.jpg" style="width:100%" onclick="onClick(this)" alt="The Beach. Me. Alone. Beautiful">
    </div>

    <div class="w3-quarter">
      <img src="https://pier24.org/pilarafoundation/wp-content/uploads/2015/08/STEM.003.jpg" style="width:100%" onclick="onClick(this)" alt="A boy surrounded by beautiful nature">
      <img src="https://pier24.org/pilarafoundation/wp-content/uploads/2015/03/ERWE.006.jpg" style="width:100%" onclick="onClick(this)" alt="A girl, and a train passing">
      <img src="https://pier24.org/pilarafoundation/wp-content/uploads/2015/08/SHEF.0011.jpg" style="width:100%" onclick="onClick(this)" alt="Quiet day at the beach. Cold, but beautiful">
    </div>
  </div>
  
  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>
  <script>
  
  function home() {
  location.replace("http://localhost/contact/PIER24PH.php")
}
function photo() {
  location.replace("http://localhost/contact/Photo.php")
}
function about() {
  location.replace("http://localhost/contact/about.php")
}
function visit() {
  location.replace("http://localhost/contact/connect.php#home")
}

</script>
</body>