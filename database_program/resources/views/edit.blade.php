
<div class="container-fluid">
					<h3 class="page-title">Genset</h3>
					<div class="row">
						<div class="col-md-12">
							<!-- INPUTS -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title"><b>Silahkan Edit Data Genset </b></h3>
								</div>
								<div class="panel-body">
									<form class="form-auth-small" action="/updateGenset/{{ $genset->id }}/{{$genset->cluster_genset}}" method="post">
										@csrf
										<div class="form-group">
											<label>Nama Genset</label>
											<input type="text" class="form-control"  value="{{ $genset->nama_genset }}" name="nama_genset" id="signin-email" placeholder="Masukkan Nama Genset">
										</div>
										<div class="form-group">
											<label>KVA</label>
											<input type="number" class="form-control" step=0.01  name="kva" id="signin-email" value="{{ $genset->kva }}" placeholder="Masukkan Kekuatan (V)">
										</div>
                                        <div class="form-group">
											<label>Debit(L/H)</label>
											<input type="number" class="form-control" step=0.01  name="debit" value="{{ $genset->debit }}" id="signin-email" placeholder="Masukkan Penggunaan Bahan Bakar">
										</div>
										<div class="form-group">
											<label>Jenis Site</label>
											<select class="form-control" name="jenis_site">
                                                    @if ( $genset->jenis_site =='null')
                                                    {
                                                        <option value="null">-- Pilih Jenis --</option>
                                                    }

                                                    @else
                                                    <option value="{{ $genset->jenis_site }}">{{ $genset->jenis_site }}</option>
                                                    @endif

    												<option value="Pendonor">Pendonor</option>
    												<option value="Permanen">Permanen</option>
											</select>
										</div>
										<button type="submit" class="btn btn-primary btn-block">EDIT</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>

