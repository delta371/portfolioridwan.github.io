<div id="popup-infokom" class="popup-box mfp-fade mfp-hide">
	<div class="content">
		<div class="image">
			<div class="slideshow-container">

                <div class="infokomSlide4 fade">
                <div class="numbertext">1 / 1</div>
                <img src="{{asset('project/infokom/smkinfokom1.png')}}" style="width:100%">
                <div class="text">Caption Text</div>
                </div>

                <div class="infokomSlide4 fade">
                <div class="numbertext">2 / 3</div>
                <img src="{{asset('project/infokom/smkinfokom2.png')}}" style="width:100%">
                <div class="text">Caption Two</div>
                </div>

                <a class="prev" onclick="plusSlides4(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides4(1)">&#10095;</a>

            </div>
		</div>
		<div class="desc">
			<div class="post-box">
				<h1>SMK INFOKOM BOGOR</h1>						
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
var slideIndex4 = 1;
showSlides4(slideIndex4);

function plusSlides4(n) {
  showSlides4(slideIndex4 += n);
}

function currentSlide(n) {
  showSlides4(slideIndex4 = n);
}

function showSlides4(n) {
  var i;
  var slides = document.getElementsByClassName("infokomSlide4");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex4 = 1}    
  if (n < 1) {slideIndex4 = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex4-1].style.display = "block";  
  dots[slideIndex4-1].className += " active";
}
</script>
@endpush

