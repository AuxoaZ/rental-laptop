<?php $this->extend('layout/template'); ?>
<?= $this->section('isi'); ?>

<?php $session = \Config\Services::session(); ?>
<div class="flash-data" data-flashdata="<?= $session->getflashdata('message'); ?>"></div>
<div class="flash-data-fail" data-flashdata-fail="<?= $session->getflashdata('fail'); ?>"></div>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="card border-light mb-3 shadow-sm p mb-3 bg-white px-3 py-3 rounded" style="max-width: 950px">
                <div class=" card-body">
                    <div class="row mt-0 mb-2">
                        <div class="col-lg-12">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active" aria-current="page">Data laptop</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-lg-12">
                            <h1 class="h3 card-title text-gray-800"><?= $judul; ?></h1>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-5">
                            <a href="<?= base_url(); ?>/data_laptop/form_tambah" class="btn btn-primary">Tambah laptop</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <table class=" table table-hover table-responsive">
                                <thead>
                                    <tr class="table">
                                        <th scope="col" class="text-center">No</th>
                                        <th scope="col">Tipe</th>
                                        <th scope="col">Merk</th>
                                        <th scope="col">Seri</th>
                                        <th scope="col" class="text-center">Jumlah</th>
                                        <th scope="col" class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($laptop as $lp) :  ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $lp['nama_tipe']; ?></td>
                                            <td><?= $lp['merk']; ?></td>
                                            <td><?= $lp['seri']; ?></td>
                                            <td class="text-center">
                                                <?php if ($lp['jumlah'] == 0) : ?>
                                                    <span class="badge badge-danger">0</span>
                                                <?php else : ?>
                                                    <span class="badge badge-success" style="background-color: #27d383; "><?= $lp['jumlah']; ?></span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <a href="<?= base_url('/admin/data_laptop/detail') ?>/<?= $lp['id_laptop']; ?>"><i class="fas fa-info-circle mr-2" style="font-size: 16px;"></i></a>
                                                <a href="<?= base_url('/admin/data_laptop/form_ubah') ?>/<?= $lp['id_laptop']; ?>"><i class="fas fa-edit mr-2" style="font-size: 16px;"></i></a>
                                                <a href="<?= base_url('/admin/data_laptop/hapus') ?>/<?= $lp['id_laptop']; ?>" class="tombol-confirm"><i class="fas fa-trash text-danger" style="font-size: 16px;"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>

<?= $this->endsection('isi'); ?>