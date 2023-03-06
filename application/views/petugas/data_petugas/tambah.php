<section class="konten mt-2">
    <div class="container-fluid">

        <div class="card border-dark">
            <div class="card-header bg-danger text-white">
                <?= $title; ?>


                <a href="<?= base_url('admin/Data_petugas') ?>" class="btn btn-sm btn-light float-right"> Kembali</a>
            </div>
            <div class="card-body">
                <form method="post" action="<?= base_url('admin/Data_petugas/insert') ?>">
                
                    <div class="form-group">
                        <label for="">nama petugas</label>
                        <input type="text" name="nama_petugas" class="form-control"  required>
                    </div>
                    <div class="form-group">
                        <label for="">username</label>
                        <input type="text" name="username" class="form-control"  required>
                    </div>
                    <div class="form-group">
                        <label for="">password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>