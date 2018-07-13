@extends('layouts.layout')
@section('content')
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-pencil"></i>Input Data Detail Mobil</h1>
          <p></p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-car fa-lg"></i></li>
          <li class="breadcrumb-item active">Detail Mobil</a></li>
        </ul>
      </div>

      
    @include('layouts.flash')

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <input type="text"  id="myInput" onkeyup="myFunction()" placeholder=" Search fo name..">
               <br>
              <br>
                <div class="table-responsive">
                  <table class="table" id="myTable">
                      <thead class=" text-primary">
                      <th>Nomer</th>
                      <th>Nama Mobil</th>
                      <th>Warna</th>
                      <th>Transmisi</th>
                      <th>Varian</th>
                      <th>Cakupan Mesin</th>
                      <th>Penumpang</th>
                      <th>Kilometer</th>
                      <th>Tahun Keluar</th>
                      <th>Harga</th>
                      <th>Deskripsi</th>
                      <th colspan="3">Action</th>
                    </thead>
                    <tbody>
                                <?php $nomor = 1; ?>
                        @php $no = 1; @endphp
                        @foreach($a as $data)
                                <tr>
                                  <td>{{ $no++ }}</td>
                                  <td>{{ $data->Mobil->nama }}</td>
                                  <td>{{ $data->warna }}</td>
                                  <td>{{ $data->transmisi }}</td>
                                  <td>{{ $data->varian }}</td>
                                  <td>{{ $data->cakupan_mesin }} cc</td>
                                  <td>max : {{ $data->penumpang }} orang</td>
                                  <td>{{ $data->kilometer }} Km/jam</td>
                                  <td>{{ $data->tahun_keluar }}</td>
                                  <td><?php echo 'Rp.'. number_format($data->harga)?></td>
                                  <td>{!! $data->deskripsi !!}</td>
                          
                        <td>
                            <a class="btn btn-warning" href="{{ route('detail_mobil.edit',$data->id) }}"><span class="fa fa-pencil" style="color: white"> Edit</span></a>
                        </td>
                        <td>
                            <form method="post" action="{{ route('detail_mobil.destroy',$data->id) }}">
                                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="DELETE">

                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"><span class="fa fa-trash"> Delete</button>
                            </form>
                        </td>
                      
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
