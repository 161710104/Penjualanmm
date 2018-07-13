@extends('member.master')
@section('content')
@include('member.partials.nav')
<section class="features-top-area" id="features">
<div class="container">
            <div class="row promo-content">
<div class="container">
                <div class="col-sm-14">
                   <h3 class="title text-center" style="color: black">Iklanku</h3>
                    @include('layouts.flash')
                   @foreach($mobil as $data)
                   <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-course mb20">
                      <form method="post" action="{{ route('mobils.destroy',$data->id) }}">
                                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="DELETE">
                      <button type="submit" class="close" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">
                      <span aria-hidden="true">&times;</span>
                      </button>
                    </form>
                        <img src="{{ asset('/img/'.$data->gambar.'') }}" alt="" style="width: 450px;height: 250px">
                        <div class="course-details padding30">
                            <h3 class="font18">{{$data->nama}}</h3>
                            <p class="mt30"><a href="" class="enroll-button">View Detail</a>
                              <span class="course-price"></span>
                              <a class="enroll-button" href="{{ route('mobils.edit',$data->id) }}"><span class="fa fa-pencil"></span></a>
                              @if($data->statuss == 1)
                                <form action="{{ route('mobils.terjual',$data->id) }}" method="post">
                                   {{ csrf_field() }}
                                <button type="submit" class="btn btn-warning" style="width: 130px;" >Belum Terjual</button>
                                </form>
                                @elseif($data->terjual == 0)
                                <form action="{{ route('mobils.terjual',$data->id) }}" method="post">
                                    {{ csrf_field() }}
                                <button class="btn btn-info" type="submit">Terjual</button>
                                </form>
                                @endif                      
                        
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
                      <script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection

<!-- -------------------------------------------Mobil create------------------------------------------------------------------ -->