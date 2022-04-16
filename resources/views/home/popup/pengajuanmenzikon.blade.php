<div id="popup-menzikonpengajuan" class="popup-box mfp-fade mfp-hide">
	<div class="content">
		<div class="image">
			<div class="slideshow-container">

                <div class="mySlides2 fade">
                <div class="numbertext">1 / 3</div>
                <img src="{{asset('project/menzikon/pengajuanmenzikon.png')}}" style="width:100%">
                <div class="text">Caption Text</div>
                </div>

                <div class="mySlides2 fade">
                <div class="numbertext">2 / 3</div>
                <img src="{{asset('project/menzikon/berandapengajuancuti.png')}}" style="width:100%">
                <div class="text">Caption Two</div>
                </div>

                <div class="mySlides2 fade">
                    <div class="numbertext">3 / 4</div>
                    <img src="{{asset('project/menzikon/formpengajuanmenzikon.png')}}" style="width:100%">
                    <div class="text">Caption Three</div>
                </div>

                <div class="mySlides2 fade">
                    <div class="numbertext">4 / 4</div>
                    <img src="{{asset('project/menzikon/anggotapengajuanmenzikon.png')}}" style="width:100%">
                    <div class="text">Caption Three</div>
                </div>

                <a class="prev" onclick="plusSlides2(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides2(1)">&#10095;</a>

            </div>
		</div>
		<div class="desc">
			<div class="post-box">
				<h1>PENGAJUAN CUTI, KREDIT BANK, RUMAH MENZIKON PUSZIAD</h1>						
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
var slideIndex2 = 1;
showSlides2(slideIndex2);

function plusSlides2(n) {
  showSlides2(slideIndex2 += n);
}

function currentSlide(n) {
  showSlides2(slideIndex2 = n);
}

function showSlides2(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides2");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex2 = 1}    
  if (n < 1) {slideIndex2 = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex2-1].style.display = "block";  
  dots[slideIndex2-1].className += " active";
}
</script>
@endpush


