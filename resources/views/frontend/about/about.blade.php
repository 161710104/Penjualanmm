<div class="col-sm-9">
					<div class="blog-post-area">
						@php
                        $about = App\About::paginate(1);
                        @endphp
                

              			@foreach($about as $data)
						<h2 class="title text-center">About</h2>
						<div class="single-blog-post">
							<h3>{{$data->nama}}</h3>
							<a href="">
								<img src="{{asset('/img/'.$data->gambar.'')}} " width="500" height="500">
							</a>
							<p>
								{!! $data->isi !!}</p> <br>

						</div>
						@endforeach
					</div><!--/blog-post-area-->
				</div>