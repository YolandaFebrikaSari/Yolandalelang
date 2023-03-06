<div class="container">

	<div class="row">
		<div class="col-md-12">
			
			<?php if ($success) : ?>
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="glyphicon glyphicon-remove"></i></span></button>
					<strong>Success !</strong> <?php echo $success; ?>
				</div>
			<?php endif; ?>

			<div class="card border-dark">
            <div class="card-header bg-danger text-white">
                <?= $title; ?>

			<a href="<?php echo base_url('admin/data_petugas/tambah_petugas') ?>" class="btn btn-sm btn-warning float-right">Tambahkan petugas</a>
			</div>
			
			<div class="card-body">
			<div class="table-responsive">
				<table class="table table-hover table-bordered">
					<tr>
						<th>NO.</th>
						<th>Nama Petugas</th>
						<th>Username</th>
						<th>Action</th>
					</tr>
					<?php $i = 1;
					foreach ($tb_petugas as $ptgs) : ?>
						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $ptgs->nama_petugas; ?></td>
							<td><?php echo $ptgs->username; ?></td>
                            <td>
								<a href="<?php echo base_url('admin/data_petugas/edit/' . $ptgs->id_petugas) ?>" class="btn btn-sm btn-primary">Edit</a>
								<a href="<?php echo base_url('admin/data_petugas/delete/' . $ptgs->id_petugas) ?>" class="btn btn-sm btn-danger">Delete</a>


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
