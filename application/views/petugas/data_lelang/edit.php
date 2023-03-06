<?php
$tgl_lelang = substr($auction->tgl_lelang, 0, 10);
$jam_lelang = substr($auction->tgl_lelang, 11);
?>
<section class="konten mt-2">
    <div class="container-fluid">

        <div class="card border-dark">
            <div class="card-header bg-danger text-white">
               
                <a href="<?= base_url('petugas/Data_lelang') ?>" class="btn btn-sm btn-light float-right"> Kembali</a>

            </div>
            <div class="card-body">
			<form action="" method="post" enctype="multipart/form-data">
				<?= validation_errors() ?>
				<div class="form-group">
					<label for="product"><strong>Barang</strong></label>
					<input type="hidden" class="form-control" name="products" value="<?= $auction->id_barang ?>">
					<input type="text" class="form-control" value="<?= $auction->nama_barang ?>" readonly>
				</div>
				<div class="form-group row">
					<div class="col-sm-2">
						<label for="tgl_lelang"><strong>Tanggal Lelang</strong></label>
						<input type="date" name="tgl_lelang" id="tgl_lelang" value="<?= $tgl_lelang ?>"
						placeholder="Enter .." />
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-2">
						<label for="jam_lelang"><strong>Jam Lelang</strong></label>
						<input type="time" name="jam_lelang" id="jam_lelang" value="<?= $auction->jam_lelang ?>"
						placeholder="Enter .." />
					</div>
				</div>
				<div class="form-group">
					<label for="petugas"><strong>Petugas</strong></label>
					<input type="hidden" class="form-control" name="petugas" value="<?= $auction->id_petugas ?>">
					<input type="text" class="form-control" value="<?= $auction->nama_petugas ?>" readonly>
				</div>
				<div class="form-group">
                        <label for="status"><strong>Status</strong></label></br>
                        <label class="radio-inline">
                            <input type="radio" name="status" <?= ($auction->status == 'dibuka') ? 'checked' : null ?> value="dibuka">
                            Dibuka
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="status" <?= ($auction->status == 'ditutup') ? 'checked' : null?> value="ditutup">
                            Ditutup
                        </label>
                    </div>
				<div class="form-group">
						<button type="submit" class="btn btn-primary" name="save" value="true">Simpan</button>
				</div>
                </form>
            </div>
        </div>
	</div>
    </div>
</section>
