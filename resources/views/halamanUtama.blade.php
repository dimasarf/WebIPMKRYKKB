<!DOCTYPE html>
<html lang="en">
<head>
	<title>KPMKRY-KKB</title>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Link -->
	<link rel="stylesheet" type="text/css" href="/css/IPMKRY-KKB2.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	<!-- Navbar -->
	<nav class="navbar w3-top">
		<div class="nav">
			<div class="logo">
				<div class="centerNav">
					<a href="#">KPMKRY-KKB</a>
				</div>
			</div>
			<div class="dropdownMenu" id="navbarSupportedContent">
				<ul>
					<li><a href="#" onclick="document.getElementById('contact').style.display='block'">Contact</a></li>
					<li><a href="/news">Berita</a>
					</li>
					<li><a href="/galleries">Gallery</a></li>
				</ul>
			</div>
			<div id="sidebar">
				<div class="toggleButton" onclick="toggleSidebar()">
					<span></span>
					<span></span>
					<span></span>
				</div>
					<ul>
						<li><a href="#" onclick="document.getElementById('contact').style.display='block'">Contact</a></li>
						<li><a href="/alumni">Alumni</a></li>
						<li><a href="#">FAQ</a></li>
					</ul>
			</div>
		</div>
	</nav>
	<!-- Content -->
	<div id="content">
		<div id="logoKPMKRYKKB">
			<div class="logoKPMKRY-KKB">
				<img src="Logo.jpg" style="width: 100%" alt="Logo KPMKRY-KKB">
			</div>
		</div>
		<!-- Profile -->
		<div id="profile">
			<div class="profileLayout">
				<div class="btn" type="submit"><a href="/registrasi-anggota">Pendataan Anggota</a></div>
			</div>
		</div>
		<!-- Definisi -->
		<div id="definisi">
			<div class="definisiLayout">
				<div class="definisiRedaksi">
					<h2>KPMKRY-KKB</h2>
					<p>Keluarga Pelajar Mahasiswa Kepulauan Riau Yogyakarta - Komisariat Kota Batam</p>
				</div>
				<div class="definisiKPMKRY-KKB">
					<h2>KPMKRY-KKB</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
		</div>
		<!-- Berita -->

		<div id="berita">
			<div class="beritaLayout">
				<div class="beritaRedaksi">
					<h2>Berita</h2>
					<p>Seputar Batam dan Yogyakarta</p>
				</div>
				@foreach ($kontens as $konten)
						<div class="batasBerita">
							<div class="beritaContent">
								<a target="_blank" href="flyover.jpg">
									<img src="{{ URL::asset('uploads/'.$konten->foto_depan) }}" width="300" height="200">
									<center><span class="label label-default">{{$konten->judul}}</span></center>
									<div class="btnBerita"><a href="/post/{{$konten->id}}">Read More</a></div>
								</a>
							</div>
						</div>
				@endforeach

			</div>
		</div>


		<!-- gallery -->
		<div id="gallery">
			<div class="galleryLayout">
				<div class="galleryRedaksi">
					<h2>Gallery</h2>
					<p>Seputar Kegiatan dan Event KPMKRY-KKB</p>
				</div>
	  			 <!-- Container for the image gallery -->
				<div class="container">
  					<div class="Slides">
    					<div class="numbertext">1 / 6</div>
      						<img src="PSDM1.jpeg" style="width:100%">
  					</div>
					<div class="Slides">
			    		<div class="numbertext">2 / 6</div>
			      			<img src="HUMAS1.jpeg" style="width:100%">
				  	</div>
					<div class="Slides">
				    	<div class="numbertext">3 / 6</div>
				   			<img src="olahraga1.jpeg" style="width:100%">
				  	</div>

		 			<div class="Slides">
		    			<div class="numbertext">4 / 6</div>
		      				<img src="KWU1.jpeg" style="width:100%">
		  			</div>

		  			<div class="Slides">
		    		<div class="numbertext">5 / 6</div>
		      			<img src="agama1.jpeg" style="width:100%">
		  			</div>
		  			<div class="Slides">
		    			<div class="numbertext">6 / 6</div>
		      				<img src="tari1.jpeg" style="width:100%">
		  				</div>

		  		<!-- Next and previous buttons -->
		  		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		  		<a class="next" onclick="plusSlides(1)">&#10095;</a>

		  		<!-- Image text -->
		  		<div class="caption-container">
		    		<p id="caption"></p>
		  		</div>

		  		<!-- Thumbnail images -->
		  		<div class="row">
		    		<div class="column">
		      			<img class="demo cursor" src="PSDM1.jpeg" style="width:100%" onclick="currentSlide(1)" alt="Department PSDM">
		    		</div>
		    		<div class="column">
		      			<img class="demo cursor" src="HUMAS1.jpeg" style="width:100%" onclick="currentSlide(2)" alt="Department HUMAS">
		    		</div>
		    		<div class="column">
		      			<img class="demo cursor" src="olahraga1.jpeg" style="width:100%" onclick="currentSlide(3)" alt="Department Olahraga">
		    		</div>
		    		<div class="column">
		      			<img class="demo cursor" src="KWU1.jpeg" style="width:100%" onclick="currentSlide(4)" alt="Department Kewirausahaan">
		    		</div>
		    		<div class="column">
		      			<img class="demo cursor" src="agama1.jpeg" style="width:100%" onclick="currentSlide(5)" alt="Department Agama">
		    		</div>
		    		<div class="column">
		      			<img class="demo cursor" src="tari1.jpeg" style="width:100%" onclick="currentSlide(6)" alt="Department Seni dan Budaya">
		    		</div>
		  		</div>
			</div>
		</div>
	</div>

		<div id="department">
			<div class="departmentLayout">
				<div class="departmentRedaksi">
					<h2>Pengurus Inti dan Department</h2>
				</div>
					<div class="departmentStyle">
						<ul>
							<li><a href="#"><img src="PI.jpg"></a></li>
							<li><a href="#"><img src="psdm.jpg"></a></li>
							<li><a href="#"><img src="HUMAS.jpg"></a></li>
							<li><a href="#"><img src="olahraga.jpg"></a></li>
							<li><a href="#"><img src="KWU.jpg"></a></li>
							<li><a href="#"><img src="agama.jpg"></a></li>
							<li><a href="#"><img src="tari.jpg"></a></li>
						</ul>
					</div>
			</div>
		</div>
		<footer id="footer">
			<div class="footerLayout">
				<div class="about">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="smallLogo">
					<img src="/kpmkrykkb.jpg" width="100%">
				</div>
				<div class="addressLayout">
					<div class="socialMedia">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="copyright">
					<h4>© 2018, KPMKRY-KKB</h4>
				</div>
			</div>
		</footer>
	</div>

	<!-- Modal -->
	<div id="contact" class="w3-modal">
    	<div class="w3-modal-content w3-animate-top w3-card-4 teal">
      		<header class="w3-container teal w3-center w3-padding-32">
        		<span onclick="document.getElementById('contact').style.display='none'" class="w3-button teal w3-xlarge w3-display-topright">x</span>
        		<h2 class="w3-wide w3-center">CONTACT</h2>
        		<p class="w3-opacity w3-center"><i>"Feel free to contact"</i></p>
	    	<div class="w3-row w3-padding-32">
	      		<div class="w3-col m6 w3-large w3-margin-bottom">
	        		<i class="fa fa-map-marker" style="width:30px"></i> Yogyakarta, Indonesia<br>
	        		<i class="fa fa-phone" style="width:30px"></i> Phone: +6281276060044<br>
	        		<i class="fa fa-envelope" style="width:30px"> </i> Email: throwbackltd@gmail.com<br>
	      		</div>
	      		<div class="w3-col m6">
	        		<form action="/action_page.php" target="_blank">
		          		<div class="w3-row-padding" style="margin:0 -16px 8px -16px">
		            		<div class="w3-half">
		              			<input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
		            		</div>
		            		<div class="w3-half">
		              			<input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
		            		</div>
		          		</div>
		          		<input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
		           		<button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
        			</form>
      			</div>
    		</div>
    	</div>
  	</div>
<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("Slides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 4000);
}

//

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// For gallery view
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
  var slides = document.getElementsByClassName("Slides");
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

// Sidebar soft
function toggleSidebar() {
	document.getElementById('sidebar').classList.toggle('active')
}
</script>

</body>
</html>
