@extends('frontend.master')
@section('content')
@include('frontend.partials.headertop')
@include('frontend.partials.nav')
<br>
<br>
<br>
<section class="features-top-area" id="features">
@php
                        $contact = App\Contact::paginate(1);
                        @endphp
               

              @foreach($contact as $data)

        <div class="container">
            <div class="row promo-content">
                <div class="col-sm-12">
                    <div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center" style="color: black">Contact Info</h2>
	    				<address>
	    					<p>Cars-Dream</p>
							<p>{{$data->alamat}}</p>
							<p>{{$data->negara}}</p>
							<p>Mobile: +62 {{$data->no_hp}}</p>
							<p>Email: <a href="https://gmail.com/{{$data->email}}">{{$data->email}}</a></p>
	    				</address>
	    				<br>
	    				<div class="social-networks">
	    					<h2 class="title text-center" style="color: black">Social Networking</h2>
							<ul>
								<li>
									<a href="https://www.facebook.com/{{$data->facebook}}"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="https://twitter.com/{{$data->twitter}}"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="https://instagram.com/{{$data->instagram}}"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="https://youtube.com/{{$data->youtube}}"><i class="fa fa-youtube"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
	    			<div class="col-sm-8">
    				@include('frontend.contact.map')
	    			</div>
    			</div> 

</div>
                </div>
            </div>
        </div>
    </section>
	
@endforeach
@endsection