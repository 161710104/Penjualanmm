@extends('member.master')
@section('content')
@include('member.partials.nav')
<section class="features-top-area" id="features">
<div class="container">
            <div class="row promo-content">
<div class="container">
                <div class="col-sm-14">
               <h3>Detail Mobil</h3>
              <a type="button" class="btn btn-primary" href="{{ route('detail_mobil.create') }}"><i class="fa fa-plus-square"></i> Tambah</a>
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <input type="search" name="search" id="myInput" onkeyup="myFunction()" placeholder=" Search fo title.." style="width: 200px;height: 35px">
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
                            <a class="btn btn-warning" href="{{ route('detail_mobil.edit',$data->id) }}">Edit</a>
                        </td>
                        <td>
                            <form method="post" action="{{ route('detail_mobil.destroy',$data->id) }}">
                                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="DELETE">

                        <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                      
                                </tr>
                                @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection
