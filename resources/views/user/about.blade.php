@extends('layouts.menu')

@section('content')
<div class="container-fluid p-0 position-relative">
    <img src="{{ asset('image/about.jpg') }}" class="img-fluid w-100" alt="Background Image" style="height: 350px;">
    <b><h2 class="position-absolute top-50 start-50 translate-middle text-center">About Me</b></h2>
</div>

<div class="container">
    <div class="row justify-content-center p-5">
        <div class="col-md-8">
          <p><h5>𝓗𝓮𝓵𝓵𝓸,</h5> My name is Nurul Huda Aliya binti Mohd Kamal, final student for diploma science computer in University Malaysia Pahang. My age is 20 years old. My dream is to improve my programming skill and can work in one company that can get highest salary.This is my example website for show my programming skill in front-end,back-end and design.Right now, I was internship in Cyberjaya and my end of internship is August.</p>
          <div class="d-flex gap-3">
           	<a href="https://www.instagram.com/huda_aliya/?next=%2F">
           		<i class="fa fa-instagram" style="color: black;"></i>
           	</a>
           	<a href="https://twitter.com/hudakam27618446">
           		<i class="fa fa-twitter" style="color: black;"></i>
           	</a>
           	<a href="https://www.facebook.com/huda.kamal.507/">
           		<i class="fa fa-facebook" style="color: black;"></i>
           	</a>
           	<a href="https://www.linkedin.com/in/huda-kamal-91a9b5248/">
			    <i class="fa fa-linkedin" style="color: black;"></i>
			</a>
            </div>
          <button type="button" class="btn btn-info mt-2">Know me more!</button>
        </div>
        <div class="col-md-4">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
			  <div class="carousel-indicators">
			    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
			    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
			    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 3"></button>
			    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 3"></button>

			  </div>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="{{ asset('image/01.jpg') }}" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="{{ asset('image/02.JPG') }}" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="{{ asset('image/03.jpg') }}" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="{{ asset('image/04.jpg') }}" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="{{ asset('image/05.jpg') }}" class="d-block w-100" alt="...">
			    </div>
			  </div>
			  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="visually-hidden">Previous</span>
			  </button>
			  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="visually-hidden">Next</span>
			  </button>
			</div>
        </div>
    </div>
    <div class="row justify-content-center p-5">
	    <div class="col-md-8">
	        <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
	            <div class="carousel-inner">
	                <div class="carousel-item active">
	                    <figure class="text-center">
	                        <blockquote class="blockquote">
	                            <p>“Sometimes it pays to stay in bed on Monday, rather than spending the rest of the week debugging Monday’s code.”</p>
	                        </blockquote>
	                        <figcaption class="blockquote-footer">
	                            Someone famous in <cite title="Source Title">Dan Salomon</cite>
	                        </figcaption>
	                    </figure>
	                </div>
	                <div class="carousel-item active">
	                    <figure class="text-center">
	                        <blockquote class="blockquote">
	                            <p>“Coding is the language of the future, and every girl should learn it. As I’ve learned from watching girls grow and learn in our classrooms, coding is fun, collaborative and creative.”</p>
	                        </blockquote>
	                        <figcaption class="blockquote-footer">
	                            Someone famous in <cite title="Source Title">Reshma Saujani</cite>
	                        </figcaption>
	                    </figure>
	                </div>
	                <div class="carousel-item active">
	                    <figure class="text-center">
	                        <blockquote class="blockquote">
	                            <p>“Computer programming is quickly becoming an essential career skill. Learning to code is a fantastic opportunity equalizer — if you’re good at it, it can help you achieve your dreams.”</p>
	                        </blockquote>
	                        <figcaption class="blockquote-footer">
	                            Someone famous in <cite title="Source Title">Cory Booker</cite>
	                        </figcaption>
	                    </figure>
	                </div>
	            </div>
	            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
	                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	                <span class="visually-hidden">Previous</span>
	            </button>
	            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
	                <span class="carousel-control-next-icon" aria-hidden="true"></span>
	                <span class="visually-hidden">Next</span>
	            </button>
	        </div>
	    </div>
	</div>

</div>
@endsection
