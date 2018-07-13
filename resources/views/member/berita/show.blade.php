@extends('member.master')
@section('content')
@include('member.partials.nav')
<section class="features-top-area" id="features">
		<div class="container">
            <div class="row promo-content">
					<div class="col-sm-12">
					<div class="blog-post-area">
						<h2 class="title text-center"><font color="black">Berita</font></h2>
						<div class="single-blog-post">
							<center><h3>{{$beritas->judul}}</h3></center>
							Diperbarui pada: <?php echo date('d F Y' , strtotime($beritas->created_at));?>
							<a href="">
								<img src="{{asset('/img/'.$beritas->gambar.'')}} " width="300" height="300">
							</a>
						</div>
						<p>{!! $beritas->isi !!}</p> <br>

					</div><!--/blog-post-area-->
				</div>
			</div>
		</div>
	</section>
	<br>
@endsection
