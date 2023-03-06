
<div class="container logo-wrap">
                <div class="row pt-2">
                    <div class="col-12 text-center">
                        <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
                       <img src="<?= base_url('assets/images/lelang.png'); ?>" height="350" width="800">
                    </div>
                </div>
            </div>
            
            
    </nav>

</div>
        </header>
        <!-- END header -->

<div class="container-fluid">

    <div class="row text-center mt-5">
        <!-- begin Page Content -->

		
        <?php foreach ($auction as $auc) : ?>
            <?php if($auc->status == 'dibuka'): ?>
            <div class="card ml-5 mb-5" style="width: 30rem;">
                <div class="card-body">

                <img src="<?= base_url() . 'assets/images/barang/' . $auc->gambar ?>" class="card-img-top" alt="...">
                <div class="card-body">
                        <h5 class="card-title"><?= $auc->nama_barang; ?></h5>
                        <h5 class="card-title"><?= $auc->deskripsi_barang; ?></h5>
                    </a>
                </div>
                <strong>Rp.<?= $auc->harga_awal?></strong>
                <br></br>
                <a href="<?= base_url('petugas/auction/detail_barang/') . $auc->id_lelang; ?>" class="btn btn-primary">Lihat Detail</a>
            </div>
		</div>
        <?php endif; ?>
			 <?php endforeach; ?> 

    </div>

</div>
