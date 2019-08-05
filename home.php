<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing:border-box
padding:0;
margin: 0;}

.mySlides {display:none}
/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
  padding-top: 60px;
}
/* Caption text */

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}
/* The dots/bullets/indicators */
.dot {
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
.active {
  background-color: #717171;
}
/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

ul {
    list-style-type: none;
    margin: 0px;
    padding: 0px;
    overflow: hidden;
    background-color: #333;
}

li a.login{
    float: right;
}
li a:hover {
      background-color: #ffff;
      color: black;
  }
li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.login {
    background-color: #4CAF50;
    padding: 35px;
    font-size: 20px;
  }
#logo img{
  float: left;
  padding: 10px;
}
body{
    background-color: #d6d6c2;
  }
</style>
</head>
<body>

<ul>
  <li><a class="login" href="index.php"><b>Login<b></a></li>
  <li><a id="logo"><img src="logo.png"></a></li>
</ul>
<br><br>

<center>
  <h1>Manfaatkan teknologi digital untuk meningkatkan kompetensimu!</h1>
  <p style="font-size: 17px;">Kemajuan teknologi informasi dan komunikasi (TIK) serta pergeseran paradigma pendidikan mempengaruhi metode dan proses pembelajaran. E-learning merupakan salah satu bentuk penerapan dari perubahan proses pembelajaran tersebut.  Dilihat dari sisi fungsi e-learning memiliki 3(tiga) fungsi yaitu sebagai suplemen (pelengkap), komplemen (pelengkap), dan substitusi (pengganti).

Selain komputer dan jaringan internet, yang berperan dalam e-learning adalah producer yaitu yang membuat konten (tulisan, gambar, video, animasi), host yaitu penyedia e-learning melalui jaringan internet (browser), dan learner yaitu pemakai/pengguna e-learning (mahasiswa, peserta didik, pengguna umum, dan sebagainya).

Yang perlu diperhatikan pada saat memilih internet untuk kegiatan pembelajaran adalah analisis kebutuhan.  Apakah berfungsi sebagai tambahan, pelengkap atau pengganti pembelajaran tatap muka. Selain itu ketersediaan internet dan infrastrukturnya, tenaga pelaksana, dan keuntungan menggunakan e-learning.</p>
</center>

  
<center>
<div class="slideshow-container">
    <div class="mySlides fade">
      <img src="slide1.png" style="width:80%">
    </div>

    <div class="mySlides fade">
      <img src="slide2.png" style="width:80%">
    </div>

    <div class="mySlides fade">
      <img src="slide3.png" style="width:80%">
    </div>
</div>
</center>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();
function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>



</body>
</html>
