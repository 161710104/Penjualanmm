<div class="left-sidebar">
                        <h2 style="color: black">Berita Otomotif</h3>
                        <div class="col-lg-14">
          <div class="list-group">
            @php
                        $berita = App\Berita::paginate(6);
                        @endphp
                                @foreach($berita as $data)
            <a href="/berita/{{$data->id}}" class="list-group-item"><img src="{{asset('/img/'.$data->gambar.'')}} " lass="img-fluid rounded mb-3 mb-md-0" width="80" height="80"> {{$data->judul}}</a>
            @endforeach
          </div>
        </div>
    </div>
        <!-- /.col-lg-3 -->