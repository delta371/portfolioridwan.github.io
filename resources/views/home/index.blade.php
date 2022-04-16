@extends('template')
@section('content')
        <!--
			Container
		-->
		<div class="container">

			<!--
				Card - Started
			-->
			<div class="card-inner card-started active" id="home-card">

				<!-- Started Background -->
				<div id="particles-bg" class="slide" style="background-image: url(images/bg1.jpg);background-size:cover !important;"></div>
				
				<div class="centrize full-width">
					<div class="vertical-center">

						<!-- Started titles -->
						<div class="title"><span>Muhamad</span> Ridwan</div>
						<div class="subtitle">
							I am 
							<div class="typing-title">
								<p>a <strong>web developer.</strong></p>
								<p>a <strong>fullstack developer.</strong></p>
								<p>a <strong>backend developer.</strong></p>
							</div>
							<span class="typed-title"></span>
						</div>
						
					</div>
				</div>

			</div>

			<!-- 
				Card - About
			-->
            @include('home.about')
			
			<!-- 
				Card - Resume
			-->
			@include('home.resume')
			
			<!-- 
				Card - Works
			-->
            @include('home.works')

			<!-- 
				Card - Blog
			-->
			@include('home.blog')
			
			<!-- 
				Card - Contacts
			-->
            @include('home.contacts')
			
			<!-- 
				Lines Grid
			-->
			<div class="lines-grid">
				<div class="row">
					<div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3"></div>
					<div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3">
						<div class="lines">
							<div class="line-1"></div>
							<div class="line-2" style="animation-delay: 10s;"></div>
						</div>
					</div>
					<div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3">
						<div class="lines">
							<div class="line-1"></div>
						</div>
					</div>
					<div class="col col-m-0 col-t-0 col-d-0 col-d-lg-3">
						<div class="lines">
							<div class="line-1"></div>
							<div class="line-2" style="animation-delay: 0s;"></div>
						</div>
					</div>
				</div>
			</div>

		</div>
@endsection