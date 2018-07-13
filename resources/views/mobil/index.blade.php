@extends('layouts.layout')
@section('content')
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-car"></i> Data Mobil</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-car"></i></li>
          <li class="breadcrumb-item active"><a href="#">Mobil</a></li>
        </ul>
      </div>

      
    @include('layouts.flash')

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
            <a class="btn btn-outline-primary" href="{{ route('mobils.create') }}"><i class="fa fa-plus-square"></i>Tambah</a>
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <input type="text"  id="myInput" onkeyup="myFunction()" placeholder=" Search fo name..">
               <br>
              <br>
                <div class="table-responsive">
                  <table class="table" id="myTable">
                      <thead class=" text-primary">
                      <th>Nomer</th>
                      <th>Gambar</th>
                      <th>Nama Mobil</th>
                      <th>Merk Mobil</th>
                      <th>Model Mobil</th>
                      <th>Nama Penjual</th>
                      <th>Lokasi</th>
                      <th>No hp</th>
                      <th>Alamat</th>
                      <th colspan="3">Action</th>
                    </thead>
                    <tbody>
                                <?php $nomor = 1; ?>
                        @php $no = 1; @endphp
                        @foreach($mobil as $data)
                                <tr>
                                  <td>{{ $no++ }}</td>
                                  <td><img src="{{asset('/img/'.$data->gambar.'')}} " width="70" height="70"></td>
                                  <td>{{ $data->nama }}</td>
                                  <td>{{ $data->Merk->nama }}</td>
                                  <td>{{ $data->model }}</td>
                                  <td>{{ Auth::user()->name }}</td>
                                  <td>{{ $data->lokasi }}</td>
                                  <td>0{{ $data->no_hp }}</td>
                                  <td>{{ $data->alamat }}</td>

                        <td>
                            <a class="btn btn-warning" href="{{ route('mobils.edit',$data->id) }}"><span class="fa fa-pencil" style="color: white"> Edit</span></a>
                        </td>
                        <td>
                            <form method="post" action="{{ route('mobils.destroy',$data->id) }}">
                                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="DELETE">

                        <button type="submit" class="btn btn-danger"><span class="fa fa-trash"> Delete</button>
                            </form>
                        </td>
                        <td>
                        @if($data->status == 1)
                                <form action="{{ route('mobils.publish',$data->id) }}" method="post">
                                   {{ csrf_field() }}
                                <button type="submit" class="btn btn-warning">unPublish</button>
                                </form>
                                @elseif($data->publish == 0)
                                <form action="{{ route('mobils.publish',$data->id) }}" method="post">
                                    {{ csrf_field() }}
                                <button class="btn btn-info" type="submit">Publish</button>
                                </form>
                                </td>
                                @endif 

                      <td>
                        @if($data->statuss == 1)
                                <form action="{{ route('mobils.terjual',$data->id) }}" method="post">
                                   {{ csrf_field() }}
                                <button type="submit" class="btn btn-warning">Belum Terjual</button>
                                </form>
                                @elseif($data->terjual == 0)
                                <form action="{{ route('mobils.terjual',$data->id) }}" method="post">
                                    {{ csrf_field() }}
                                <button class="btn btn-info" type="submit">Terjual</button>
                                </form>
                                </td>
                                @endif                     
                                </tr>
                                @endforeach
                    </tbody>
                  </table>
                      <script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
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