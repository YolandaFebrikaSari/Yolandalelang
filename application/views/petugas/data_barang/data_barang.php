<div class="container">

	<div class="row">
		<div class="col-md-12">
			
		<?= $this->session->flashdata('message'); ?>
	

			<div class="card border-dark">
            <div class="card-header bg-danger text-white">
             

			<a href="<?= base_url('petugas/data_barang/tambah_barang') ?>" class="btn btn-sm btn-warning float-right">Tambahkan barang</a>
			</div>
			

			<div class="card-body">
			<div class="table-responsive">
				<table class="table table-hover table-bordered">
					<tr>
						<th>NO.</th>
						<th>Gambar.</th>
						<th>Nama Barang</th>
						<th>Deskripsi Barang</th>
						<th>Harga</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
					<?php $i = 1;
					foreach ($tb_barang as $brg) : ?>
						<tr>
							<td><?= $i; ?></td>
							<td>
								<img src="<?=base_url() . '/assets/images/barang/' . $brg->gambar ?>"
								width="100">
							</td>
							<td><?= $brg->nama_barang; ?></td>
							<td><?= $brg->deskripsi_barang; ?></td>
							<td>Rp. <?= number_format($brg->harga_awal, 2, ',', '.'); ?></td>
							<th>
								<?php if ($brg->status_barang):?>
									<div class="label label-danger">Terjual</div>
									<?php else:?>
										<div class="label label-success">Belum terjual</div>
								<?php endif;?>
							</th>
							<td>
								<a href="<?= base_url('petugas/data_barang/edit/' . $brg->id_barang) ?>" class="btn btn-sm btn-primary">Edit</a>
								<button onclick="hapusAdmin('<?= base_url('petugas/data_barang/delete/' . $brg->id_barang) ?>')"
                                            class="btn btn-danger tombol-hapus btn-sm">Delete</button>


							</td>
						</tr>
					<?php $i++;
					endforeach; ?>
				</table>
				</div></div>
			</div>
		</div>
	</div>
	</div>

</div>
