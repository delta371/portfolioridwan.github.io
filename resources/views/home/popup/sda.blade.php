<div id="popup-dinassda" class="popup-box mfp-fade mfp-hide">
	<div class="content">
		<div class="image">
			<div class="slideshow-container">

                <div class="mySlides3 fade">
                <div class="numbertext">1 / 3</div>
                <img src="{{asset('project/dsda.png')}}" style="width:100%">
                <div class="text">Caption Text</div>
                </div>

                <div class="mySlides3 fade">
                <div class="numbertext">2 / 3</div>
                <img src="{{asset('project/dsda/beranda.png')}}" style="width:100%">
                <div class="text">Caption Two</div>
                </div>

                <div class="mySlides3 fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="{{asset('project/dsda/monitor.png')}}" style="width:100%">
                    <div class="text">Caption Three</div>
                </div>

                <div class="mySlides3 fade">
                    <div class="numbertext">4 / 4</div>
                    <img src="{{asset('project/dsda/alatberat.png')}}" style="width:100%">
                    <div class="text">Caption Three</div>
                </div>

                <a class="prev" onclick="plusSlides3(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides3(1)">&#10095;</a>

            </div>
		</div>
		<div class="desc">
			<div class="post-box">
				<h1>Web Dinas Sumber Daya Air</h1>						
				<div class="blog-detail">Web Application</div>
				<!-- <div class="blog-content">
					<p>
						Web Dinas Sumber Daya Air adalah website yang diginakan untuk memonitoring kegiatan - kegiatan yang ada di DSDA Jakarta.
					</p>
					<p>
						Fitur yang tersedian didalam website ini adalah : 
					</p>
					<ul class="list-style">
						<li>Memonitoring kegiatan-kegiatan yang dilakukan oleh DSDA Jakarta</li>
						<li>Memonitoring data perbidang hingga sampai detail-detailnya</li>
						<li>Sudah terintegrasi dengan aplikasi portaldata yang dimiliki oleh DSDA Jakarta menggunakan API 
                            untuk mengambil rekap-rekap yang ada didalamnya sehingga bisa disajikan di Web DSDA Jakarta untuk dimonitoring.</li>
                        <li>Sudah terintegrasi dengan aplikasi GPS Tracker menggunakan API , agar bisa memonitoring truck alat berat, dump truck dan pompa mobile. 
                            didalam peta. sehingga bisa terlihat perjalanannya dan detail dari setiap truck nya.
                        </li>
                        <li>Dan memiliki banyak fitur yang lainnya seperti profile, informasi publik dsb.</li>
					</ul>
				</div> -->
				<!-- <a href="https://dsda.jakarta.go.id/" target="_blank">View Project</a> -->
			</div>
		</div>
	</div>
</div>

@push('script')
<script>
var slideIndex3 = 1;
showSlides3(slideIndex3);

function plusSlides3(n) {
  showSlides3(slideIndex3 += n);
}

function currentSlide(n) {
  showSlides3(slideIndex3 = n);
}

function showSlides3(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides3");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex3 = 1}    
  if (n < 1) {slideIndex3 = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex3-1].style.display = "block";  
  dots[slideIndex3-1].className += " active";
}
</script>
@endpush

