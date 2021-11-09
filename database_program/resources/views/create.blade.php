
<div class="container-fluid">
					<h3 class="page-title">Genset</h3>
					<div class="row">
						<div class="col-md-12">
							<!-- INPUTS -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title"><b>Silahkan Masukkan Data MLM </b></h3>
								</div>
								<div class="panel-body">
									<form class="form-auth-small" action="/store" method="post">
										@csrf
										<div class="form-group">
											<label>Nama</label>
											<input type="text" class="form-control" name="Nama"  placeholder="Masukkan Nama ">
										</div>
										<div class="form-group">
											<label>Alamat</label>
											<input type="text" class="form-control" name="Alamat" placeholder="Masukkan Alamat">
										</div>
                                        <div class="form-group">
											<label>Nomor Telepon(L/H)</label>
											<input type="number" class="form-control" name="notel"  placeholder="Masukkan Nomor Telepon">
										</div>
										<div class="form-group">
											<label>Jenis Site</label>
											<select class="form-control" name="upline">
                                            @foreach($mlm as $mlms)
    												<option value="{{$mlms->id}}">{{$mlms->Nama}}</option>
											@endforeach
											</select>
										</div>
										<button type="submit" class="btn btn-primary btn-block">Tambah</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
