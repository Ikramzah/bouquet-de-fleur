<header>
  <img src="logo.jpg"/>
  <span class="titre"><h1>Wild Rose</h1></span>
  <nav role="main">
    <ul>
      <li><a href="accueil.php">Home</a></li>
        <li><a href="login1.php">Utilisateur</a></li>
        <li><a href="login1[1].php">Administrateur</a></li>
    </ul>
  </nav>
</header>
<style>
* {
box-sizing: border-box;
}

body {
font-family: sans-serif;
margin: 0px;
}header {
  background-color: #FFFCEB;
  padding:auto;
  display: flex;
  justify-content: space-between;
  position: fixed;
  height: 80px;
  top: 0px;
  right: 0px;
  left:0px;
  z-index: 999;
}
img{
  border: 1px solid #ddd;
  border-radius: 4px;
  padding-left: 3px;
  width: auto;

}
span.titre {
  color: #8A0157;
  font-family: 'Lucida Handwriting','Segoe Script', Times, serif;
  margin:0% 0%;
  position: absolute;
  left: 90px;
  top:-10px;
}
nav  ul {
  list-style-type: none;
  margin: 13% 5%;
  padding: 0;
  display: flex;
  justify-content:flex-end;
}

nav  li {
  margin: 5% 35%;
  padding: 2% 10%;
  text-align: center;
  background-color:#8A0157;
  border-radius: 30px;
}
a{
  outline: none;
  text-decoration: none;
  padding: 2px 1px 0;
  color:#FFFCEB;
}

nav li:hover {
  border-bottom: 1px solid;
  background-color: #6585f7;
  color:#FFFCEB
}

nav li:active {
  background-color: #6585f7;
  color:#FFFCEB
}

main {
  padding-top: 10px;
  }
  </style>
<div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h3 class="animate-charcter"> Wild ROSE </h3>
      </div>
    </div>
  </div>
  <div class="section"> 
    <div class="container">
      <img src="backg.jpg.jpg" alt="Snow" style="width:100%;">
      <div class="centered"><h1><span style="color:#6fa6d0">Where</span><span style="color:#9f60ad">FLOWERS</span><span style="color:#6fa6d0">bloom so does</span><span style="color:#9f60ad">_HOPE</span></h1></div>
    </div>
    <style>
      .container {
    text-align: center;
    color: rgba(255, 255, 255, 0.897);
  }
    .centered {
      position: absolute;
      top: 50%; 
      left: 50%;
      transform: translate(-50%, -50%);
    }
  </style>
    </div>
 
<style>
  p{
    background-image: url(backg.jpg.jpg);
    background-repeat: repeat;
    -webkit-text-fill-color: transparent;
    text-align: center;
  }
    .animate-charcter
{
   text-transform: uppercase;
  background-image: linear-gradient(
    -225deg,
    #af3fa8 0%,
    #9266c1 29%,
    #c54872 67%,
    #61ebe8 100%
  );
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  -webkit-text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 2s linear infinite;
  display: inline-block;
      font-size: 190px;
}

@keyframes textclip {
  to {
    background-position: 200% center;
  }
}
@import url("https://fonts.googleapis.com/css?family=Signika+Negative:300,400&display=swap");
*,
*:before,
*:after {
  box-sizing: border-box;
  
  letter-spacing: 0.04em;
}
body {
  font-family: "Signika Negative", sans-serif;
  font-weight: 300;
}
.section {
  height: 100vh;
  width: 100%;
  
  padding: 0;
  text-align: center;
  overflow: hidden;
  display: flex;
  justify-content: center;
  align-items: center;
}
</style>
<style>
  body {
    font-family: Arial;
    margin: 0;
  }
  
  * {
    box-sizing: border-box;
  }
  
  img {
    vertical-align: middle;
  }
  
  /* Position the image container (needed to position the left and right arrows) */
  .container {
    position: relative;
  }
  
  /* Hide the images by default */
  .mySlides {
    display: none;
  }
  
  /* Add a pointer when hovering over the thumbnail images */
  .cursor {
    cursor: pointer;
  }
  
  /* Next & previous buttons */
  .prev,
  .next {
    cursor: pointer;
    top: 40%;
    width: auto;
    padding: 16px;
    margin-top: -50px;
    color: white;
    font-weight: bold;
    font-size: 20px;
    border-radius: 0 3px 3px 0;
    user-select: none;
    -webkit-user-select: none;
  }
  
  /* Position the "next button" to the right */
  .next {
    right: 0;
    border-radius: 3px 0 0 3px;
  }
  
  /* On hover, add a black background color with a little bit see-through */
  .prev:hover,
  .next:hover {
    background-color: rgba(0, 0, 0, 0.8);
  }
  
  /* Number text (1/3 etc) */
  .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    top: 0;
  }
  
  /* Container for image text */
  .caption-container {
    text-align: center;
    background-color: #222;
    padding: 2px 16px;
    color: white;
  }
  
  .row:after {
    content: "";
    display: table;
    clear: both;
  }
  
  /* Six columns side by side */
  .column {
    float: left;
    width: 16.66%;
  }
  
  /* Add a transparency effect for thumnbail images */
  .demo {
    opacity: 0.6;
  }
  
  .active,
  .demo:hover {
    opacity: 1;
  }
  </style>
  <body>
  
  <h2 style="text-align:center">Nos produits</h2>
  
  <div class="container">
    <div class="mySlides">
      <div class="numbertext">1 / 6</div>
      <img src="bouquet.jpg" style="width:50%">
    </div>
  
    <div class="mySlides">
      <div class="numbertext">2 / 6</div>
      <img src="choco2.jpg" style="width:50%">
    </div>
  
    <div class="mySlides">
      <div class="numbertext">3 / 6</div>
      <img src="bouquet4.jpg" style="width:50%">
    </div>
      
    <div class="mySlides">
      <div class="numbertext">4 / 6</div>
      <img src="candle.jpg" style="width:50%">
    </div>
  
    <div class="mySlides">
      <div class="numbertext">5 / 6</div>
      <img src="choco3.jpg" style="width:50%">
    </div>
      
    <div class="mySlides">
      <div class="numbertext">6 / 6</div>
      <img src="bouquet6.jpg" style="width:50%">
    </div>
      
    <a class="prev" onclick="plusSlides(-1)"></a>
    <a class="next" onclick="plusSlides(1)"></a>
  
    <div class="caption-container">
      <p id="caption"></p>
    </div>
  
    <div class="row">
      <center>
      <div class="column">
        <img class="demo cursor" src="bouquet.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
      </div>
      <div class="column">
        <img class="demo cursor" src="choco2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
      </div>
      <div class="column">
        <img class="demo cursor" src="bouquet4.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
      </div>
      <div class="column">
        <img class="demo cursor" src="candle.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
      </div>
      <div class="column">
        <img class="demo cursor" src="choco3.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
      </div>    
      <div class="column">
        <img class="demo cursor" src="bouquet6.jpg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
      </div>
    </div>
    </center> 
  
  <script>
  let slideIndex = 1;
  showSlides(slideIndex);
  
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }
  
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
  
  function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("demo");
    let captionText = document.getElementById("caption");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    captionText.innerHTML = dots[slideIndex-1].alt;
  }
  </script>
  <button class="button button1"><a href="you.php">Contactez-nous</a></button>
<style>
  .button {
    background-color: white;
    border: none;
    color: #8A0157;
    padding: 18px 36px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 8px 6px;
    transition-duration: 0.4s;
    cursor: pointer;
    border-radius: 50%;
  }
  
  .button1 {
    background-color: #59B4EA; 
    color: black; 
    border: 2px solid #8A0157;
    border-radius: 50%;
  }
  
  .button1:hover {
    background-color: #8A0157;
    color: white;
    border-radius: 50%;
  }
</style>
position