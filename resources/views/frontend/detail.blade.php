@extends('frontend.master')
@section('content')
@include('frontend.partials.headertop')
@include('frontend.partials.nav')
<br>
<section class="features-top-area" id="features">
    <div class="container">
            <div class="row promo-content">
	<div class="col-sm-12 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-8">
							<div class="view-product">
								<div class="text-left">
								<h4>{{$DetailView->mobil->nama}}</h4>
								Diperbarui Pada: <?php echo date('d F Y' , strtotime($DetailView->updated_at));?>
								</div>
								<img src="{{ asset('/img/'.$DetailView->mobil->gambar.'') }}" alt="" />
								<h3 style="background-color: black"><div class="text-right"><?php echo 'Rp.'. number_format($DetailView->harga, 0,".","."); ?></div></h3>
							</div>
						</div>
						<div class="col-sm-4">
							<h5>Informasi Penjual</h5>
							<div class="table-responsive">
                  			<table class="table">
                    		<thead>
                                <th><i class="fa fa-user"></i>&nbsp&nbsp&nbsp{{$DetailView->user->name}}</th>
                                <th><i class="fa fa-map-marker"></i>&nbsp&nbsp&nbsp{{$DetailView->mobil->alamat}}</th>
                			</thead>
                			<td><b><i class="fa fa-map-marker">&nbsp&nbsp&nbsp{{$DetailView->mobil->lokasi}}</i></b></td>
                			<td><b><i class="fa fa-phone">&nbsp&nbsp&nbsp0{{$DetailView->mobil->no_hp}}</i></b></td>
            				</table>
        						</div>
        					</div>

						<div class="col-sm-4">
							<h5>Spesifikasi Cepat</h5>
							<div class="table-responsive">
                  			<table class="table">
                			<tr>
                			<td><b><i class="fa fa-car">&nbsp&nbsp&nbspModel</i></b></td>
                			<td>{{$DetailView->mobil->model}}</td>

                			</tr>
                			<tr>
                			<td><b><i class="fa fa-car">&nbsp&nbsp&nbspVarian</i></b></td>
                			<td>{{$DetailView->varian}}</td>

                			</tr>
                			<tr>
                			<td><b><i class="fa fa-calendar">&nbsp&nbsp&nbspTahun Keluar</i></b></td>
                			<td>{{$DetailView->tahun_keluar}}</td>

                			</tr>
            				<tr>
                			<td><b><i class="fa fa-gear">&nbsp&nbsp&nbspCakupan Mesin</i></b></td>
                			<td>{{$DetailView->cakupan_mesin}}</td>

                			</tr>
            				<tr>
                			<td><b><i class="fa fa-gear">&nbsp&nbsp&nbspTransmisi</i></b></td>
                			<td>{{$DetailView->transmisi}}</td>

                			</tr>
            				<tr>
                			<td><b><i class="fa fa-car">&nbsp&nbsp&nbspPenumpang</i></b></td>
                			<td>{{$DetailView->penumpang}}</td>

                			</tr>
            				<tr>
                			<td><b><i class="fa fa-tachometer">&nbsp&nbsp&nbspKilometer</i></b></td>
                			<td>{{$DetailView->kilometer}}</td>

                			</tr>
                			<tr>
                			<td><b><i class="fa fa-paint-brush">&nbsp&nbsp&nbspWarna</i></b></td>
                			<td>{{$DetailView->warna}}</td>

                			</tr>
            				
            				
            				</table>
        						</div>
								
						</div>
					</div><!--/product-details-->
				</div>
	<div class="col-sm-8 padding-right">
		<h2 class="title text-center"><font  style="color: black">Deskripsi</font></h2>
		<p>{!!$DetailView->deskripsi!!}</p>
	</div>		
<div class="col-sm-4">
	@include('frontend.partials.merk')
    
       
    @include('frontend.berita.partials') 
</div>

</div>
</div>
</section>
@endsection