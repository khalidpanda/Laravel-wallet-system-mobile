@extends('layouts.loginLayout')

<style type="text/css">
	* {
  box-sizing: border-box;
}

.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: center;
  width: 45%;
  display: inline-block;
  margin-left: 3%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: #161A27;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #161A27;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: #F4B84A;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
  background-color: #F4B84A;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
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
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: #161A27;
  padding: 2px 16px;
  color: #F4B84A;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.new1 {
	background-color: #F4B84A;
}
</style>
@section('content')

<!-- header box starte here-->

<div class="container bg1 bg login-top">

    <div class="row justify-content-center">

<div class="row no-gutters">

    <div class="col">
<a href="{{ url('home') }}"><img class="back" src="{{url('/uploads/Back.png')}}"></a>
    </div>
     <div class="col ">
 <img class="logo" src="{{ asset('uploads/logo.png') }}" style="width: 40%; margin-left: -20%;">
 <h4 class="text-white" style="margin-left: -90%;">Rewards</h4>

    </div> 


</div>

    </div>

</div>

<!--header box ends here -->

<br>

<!--main content card starte here -->


<div class="main-content log-line" style="background-color: #161A27; height: 100%;">
<br>
    

    <h2 style="text-align:left; margin-left: 5%; font-size: 5vw;" class="text-white">Special Deals</h2>

<div class="row">
  <div class="column">
    <img src="{{ asset('uploads/Reward1.jpg') }}" class="img-rounded" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
    <p class="text-white" style="font-size: 3vw; margin-top: 7%;">Get RM10 of any I-RENTAL car</p>
    <p style="color: #6A6A76; margin-top: -10%; font-size: 3vw;"><img style="margin-top: -5%;" src="{{ asset('uploads/Crown.png') }}">&nbsp;100 points</p>
  </div>
  <div class="column">
    <img src="{{ asset('uploads/Reward2.jpg') }}"  class="img-rounded" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
      <p class="text-white" style="font-size: 3vw; margin-top: 7%;">Get RM10 of any I-RENTAL car</p>
    <p style="color: #6A6A76; margin-top: -10%; font-size: 3vw;"><img style="margin-top: -5%;" src="{{ asset('uploads/Crown.png') }}">&nbsp;100 points</p>
  </div>
  <!--<div class="column">
    <img src="{{ asset('uploads/re1.jpg') }}"  class="img-rounded" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div> -->
  
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="{{ asset('uploads/Reward1.jpg') }}" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="{{ asset('uploads/Reward2.jpg') }}" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="{{ asset('uploads/Reward1.jpg') }}" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="{{ asset('uploads/Reward2.jpg') }}" style="width:100%">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column" style="background-color: #161A27;">
      <img class="demo cursor" src="{{ asset('uploads/Reward1.jpg') }}" style="width:100%" onclick="currentSlide(1)" alt="Get RM 10 any I-RENTAL car">
    </div>
    <div class="column">
      <img class="demo cursor" src="{{ asset('uploads/Reward2.jpg') }}" style="width:100%" onclick="currentSlide(2)" alt="Get RM 10 any I-RENTAL car">
    </div>
    <div class="column">
      <img class="demo cursor" src="{{ asset('uploads/Reward1.jpg') }}" style="width:100%" onclick="currentSlide(3)" alt="Get RM 10 any I-RENTAL car">
    </div>
    <div class="column">
      <img class="demo cursor" src="{{ asset('uploads/Reward2.jpg') }}" style="width:100%" onclick="currentSlide(4)" alt="Get RM 10 any I-RENTAL car">
    </div>
  </div>
</div>

<hr class="new1">

<p style="text-align:left; margin-left: 5%; font-size: 5vw;" class="text-white">I-RENTAL</p>
<div class="row">
	<div class="col">
    <img style="margin-left: 10%;" class="img-rounded img-responsive" src="{{ asset('uploads/Reward3.jpg') }}">

		
	</div>
	<div class="col">
    <p class="text-white" style="margin-top: 10%;">RM 5 off I-RENTAL</p>
		<p style="color: #6A6A76; margin-top: -10%; font-size: 3vw;"><img style="margin-top: -5%;" src="{{ asset('uploads/Crown.png') }}">&nbsp;100 points</p>
	</div>
	<div class="w-100"></div>
	<br>
	<div class="col">
    <img style="margin-left: 10%;" class="img-rounded img-responsive" src="{{ asset('uploads/Reward3.jpg') }}">

		
	</div>
	<div class="col">
    <p class="text-white" style="margin-top: 10%;">RM 5 off I-RENTAL</p>
		<p style="color: #6A6A76; margin-top: -10%; font-size: 3vw;"><img style="margin-top: -5%;" src="{{ asset('uploads/Crown.png') }}">&nbsp;100 points</p>
	</div>
</div>
<br><br>
        
    <div class="gap5x"></div>
</div>







<!--main contetn card ends here -->


<!--footer section -->
<footer class="main-footer me text-center" style="background:#F4B84A;">
  <div class="navbar me "  id="myNavbar">
  <a class="link" href="{{url('rewards')}}"><img class="menu1" src="{{ asset('uploads/Reward.png') }}"><br>Reward</a>
  <a class="link" href="#news"><img class="menu1" src="{{ asset('uploads/Message.png') }}"><br>Message</a>
  <a class="link" href="wallet/"><img class="menu1" src="{{ asset('uploads/Wallet.png') }}"><br>Wallet</a>
  <a class="link"href="#about"><img class="menu1" src="{{ asset('uploads/History.png') }}"><br>History</a>
   <a class="link" href="{{url('profile')}}"><img class="menu1" src="{{ asset('uploads/Account.png') }}"><br>Account</a>
  
</div>
  </footer>


<!--end of footer section-->



<script>
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
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


@endsection