@extends('frontend.master')
@section('content')
@include('frontend.partials.headertop')
@include('frontend.partials.nav')
<br>
<br>
<section class="features-top-area" id="features">
		<div class="container">
            <div class="row promo-content">
        		<div class="col-sm-3">
					@include('frontend.partials.merk')
				</div>
				
					@include('frontend.about.about')	

			</div>

		</div>
	</section>
	<br>
@endsection
