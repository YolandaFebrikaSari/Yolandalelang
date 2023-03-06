<div class="container">

	<div class="row">
		<div class="col-md-12">
		<!-- pesan error -->
			
        <?php echo $this->session->flashdata('message'); ?>

			<div class="card border-dark">
            <div class="card-header bg-danger text-white">
			<a href="<?= base_url('petugas/data_lelang/create') ?>" class="btn btn-sm btn-light float-right"><i class="fas fa-plus fa-sm"></i>LELANG</a>
			</div>
			
			<div class="card-body">
			<div class="table-responsive">
				<table class="table table-hover table-bordered table-striped">
					<tr>
						<th>Nomor</th>
						<th>Nama</th>
						<th>Gambar</th>
						<th>Harga Awal</th>
						<th>Status</th>
						<th>Pemenang</th>
						<th>Harga Akhir</th>
                        <th>Petugas</th>
						<th>Action</th>
					</tr>
					<?php $i = 1;
					foreach ($auctions as $auction) : ?>
						<tr> 
							<td><?php echo $i; ?></td>
							<td>
								<img src="<?=base_url() . '/assets/images/barang/' . $auction->gambar ?>"
								width="100">
							</td>
							<td><?= substr($auction->nama_barang,0,15); ?><h4>.....</h4></td>
							<td>Rp. <?= number_format($auction->harga_awal, 2, ',', '.'); ?></td>
							<td>
								<?php if ($auction->status == 'ditutup'):?>
									<div class="text-danger">Ditutup</div>
									<?php else:?>
										<div class="text-success">Dibuka</div>
								<?php endif;?>
							</td>
							<td>
									<?php if ($auction->pemenang == null): ?>
										-
									<?php else : ?>
										<?= $auction->pemenang ?>
									<?php endif; ?>	
							</td>
							<td>
									<?php if ($auction->harga_akhir == null): ?>
										-
									<?php else :?>
									Rp. <?= number_format($auction->harga_akhir, 2, ',', '.'); ?>
									<?php endif;?>

							</td>
								<td><?= $auction->nama_petugas; ?></td> 
								<td>
								<?php if (empty($auction->status == 'ditutup')) :?>
									<?= anchor('petugas/Data_lelang/edit/' . $auction->id_lelang,
									'<div class="btn btn-primary btn sm-mb-3"><i class="fas fa-edit"></i></div>') ?>

									 <button onclick="hapusAdmin('<?=base_url('petugas/Data_lelang/delete/' . $auction->id_lelang) ?>')"
										class="btn btn-danger btn sm-mb-3"><i class="fas fa-trash"></i></button>
								
									 <?= anchor('petugas/Data_lelang/view/' . $auction->id_lelang,
									'<div class="btn btn-info my-1 btn sm-mb-3"><i class="fas fa-eye"></i></div>') ?>

									<?php else : ?>

									<?= anchor('petugas/Data_lelang/view/' . $auction->id_lelang,
									'<div class="btn btn-info btn sm-mb-3"><i class="fas fa-eye"></i></div>') ?>
									<?php endif; ?>

								</td>

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
