<?= $this->extend('layout/template_customer'); ?>
<?= $this->section('isi'); ?>




<div class="hero inner-page" style="background-image: url('<?= base_url('/public/assets/marketplace/'); ?>/images/slide1.jpg');">
  <div class="container">
    <div class="row align-items-center justify-content-center pt-4 ">
      <div class="col-lg-5 ">
        <div class="intro  ">
          <h1 style="color: white; font-family: arial;"><strong>Katalog laptop</strong></h1>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="site-section py-3" style="background-color: #f2f2f2;">
  <div class="container inline" style="background-color: #ffffff;">
    <div class="row px-2">
      <div class="col-lg-3">
        <div class="row justify-content-center mt-2 pt-3">
          <div class="md-none">

            <div class="col-lg-12 col-md-10  ml-3 mr-1 pr-2 mb-4 px-0 ">
              <a href="<?= base_url('category/bisnis') ?>" <?php if (!$user) {
                                                              echo 'class="tombol-report"';
                                                            } ?>>
                <img src="<?= base_url('/public/assets/marketplace/'); ?>/images/bisnis.png" alt="" width="280">
              </a>
            </div>
          </div>
          <div class="md-v">
            <div class="col-12 px-2 ">
              <a href="<?= base_url('category/bisnis') ?>" <?php if (!$user) {
                                                              echo 'class="tombol-report"';
                                                            } ?>>
                <img class="img-fluid" src="<?= base_url('/public/assets/marketplace/'); ?>/images/bisnis2.jpg">
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="row pt-4">
          <?php foreach ($bisnis as $bns) : ?>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 px-2">
              <a href="<?= base_url('/detail') . '/' . $bns['id_laptop']; ?>">
                <div class="card border-color border-0 shadow-card">
                  <div class="card-body pl-3 py-1 pr-0 pr-0">
                    <div class="div d-flex justify-content-center">
                      <img style="width: 140px; height: 130px" src="<?= base_url('/public/img/upload') . '/' . $bns['gambar']; ?>" alt="">
                    </div>
                    <p style="font-size: 14px;" class="font-hitam-500 card-title my-1"><?= $bns['merk'] . ' ' . $bns['seri']; ?></p>
                    <p class="card-text mt-0 mb-1 font-hitam-500" style="font-size: 12px;"><?= $bns['prosesor'] . '/' . $bns['ram'] . '/' . $bns['penyimpanan']; ?></p>
                    <p class="my-0 font-sewa">Biaya sewa</p>
                    <p class="mt-0 font-orange ">Rp <?php $harga = $bns['harga'] / 7;
                                                    echo number_format($harga, 0, ',', '.'); ?>/hari</p>
                  </div>
                </div>
              </a>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="site-section py-3" style="background-color: #f2f2f2;">
  <div class="container inline" style="background-color: #ffffff;">
    <div class="row px-2">
      <div class="col-lg-3">
        <div class="row justify-content-center mt-2 pt-3">
          <div class="md-none">

            <div class="col-lg-12 col-md-10  ml-3 mr-1 pr-2 mb-4 px-0 ">
              <a href="<?= base_url('category/gaming') ?>" <?php if (!$user) {
                                                              echo 'class="tombol-report"';
                                                            } ?>>
                <img src="<?= base_url('/public/assets/marketplace/'); ?>/images/gaming.png" alt="" width="280">
              </a>
            </div>
          </div>
          <div class="md-v">
            <div class="col-12 px-2 ">
              <a href="<?= base_url('category/gaming') ?>" <?php if (!$user) {
                                                              echo 'class="tombol-report"';
                                                            } ?>>
                <img class="img-fluid" src="<?= base_url('/public/assets/marketplace/'); ?>/images/gaming2.jpg">
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="row pt-4">
          <?php foreach ($gaming as $bns) : ?>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 px-2">
              <a href="<?= base_url('/detail') . '/' . $bns['id_laptop']; ?>">
                <div class="card border-color border-0 shadow-card">
                  <div class="card-body pl-3 py-1 pr-0 pr-0">
                    <div class="div d-flex justify-content-center">
                      <img style="width: 140px; height: 130px" src="<?= base_url('/public/img/upload') . '/' . $bns['gambar']; ?>" alt="">
                    </div>
                    <p style="font-size: 14px;" class="font-hitam-500 card-title my-1"><?= $bns['merk'] . ' ' . $bns['seri']; ?></p>
                    <p class="card-text mt-0 mb-1 font-hitam-500" style="font-size: 12px;"><?= $bns['prosesor'] . '/' . $bns['ram'] . '/' . $bns['penyimpanan']; ?></p>
                    <p class="my-0 font-sewa">Biaya sewa</p>
                    <p class="mt-0 font-orange ">Rp <?php $harga = $bns['harga'] / 7;
                                                    echo number_format($harga, 0, ',', '.'); ?>/hari</p>
                  </div>
                </div>
              </a>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="site-section py-3" style="background-color: #f2f2f2;">
  <div class="container inline" style="background-color: #ffffff;">
    <div class="row px-2">
      <div class="col-lg-3">
        <div class="row justify-content-center mt-2 pt-3">
          <div class="md-none">

            <div class="col-lg-12 col-md-10  ml-3 mr-1 pr-2 mb-4 px-0 ">
              <a href="<?= base_url('category/multimedia') ?>" <?php if (!$user) {
                                                                  echo 'class="tombol-report"';
                                                                } ?>>
                <img src="<?= base_url('/public/assets/marketplace/'); ?>/images/multimedia.png" alt="" width="280">
              </a>
            </div>
          </div>
          <div class="md-v">
            <div class="col-12 px-2 ">
              <a href="<?= base_url('category/multimedia') ?>" <?php if (!$user) {
                                                                  echo 'class="tombol-report"';
                                                                } ?>>
                <img class="img-fluid" src="<?= base_url('/public/assets/marketplace/'); ?>/images/multimedia2.jpg">
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="row pt-4">
          <?php foreach ($multimedia as $bns) : ?>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 px-2">
              <a href="<?= base_url('/detail') . '/' . $bns['id_laptop']; ?>">
                <div class="card border-color border-0 shadow-card">
                  <div class="card-body pl-3 py-1 pr-0 pr-0">
                    <div class="div d-flex justify-content-center">
                      <img style="width: 140px; height: 130px" src="<?= base_url('/public/img/upload') . '/' . $bns['gambar']; ?>" alt="">
                    </div>
                    <p style="font-size: 14px;" class="font-hitam-500 card-title my-1"><?= $bns['merk'] . ' ' . $bns['seri']; ?></p>
                    <p class="card-text mt-0 mb-1 font-hitam-500" style="font-size: 12px;"><?= $bns['prosesor'] . '/' . $bns['ram'] . '/' . $bns['penyimpanan']; ?></p>
                    <p class="my-0 font-sewa">Biaya sewa</p>
                    <p class="mt-0 font-orange ">Rp <?php $harga = $bns['harga'] / 7;
                                                    echo number_format($harga, 0, ',', '.'); ?>/hari</p>
                  </div>
                </div>
              </a>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="site-section py-3" style="background-color: #f2f2f2;">
  <div class="container inline" style="background-color: #ffffff;">
    <div class="row px-2">
      <div class="col-lg-3">
        <div class="row justify-content-center mt-2 pt-3">
          <div class="md-none">

            <div class="col-lg-12 col-md-10  ml-3 mr-1 pr-2 mb-4 px-0 ">
              <a href="<?= base_url('category/ultra') ?>" <?php if (!$user) {
                                                            echo 'class="tombol-report"';
                                                          } ?>>
                <img src="<?= base_url('/public/assets/marketplace/'); ?>/images/ultra.png" alt="" width="280">
              </a>
            </div>
          </div>
          <div class="md-v">
            <div class="col-12 px-2 ">
              <a href="<?= base_url('category/ultra') ?>" <?php if (!$user) {
                                                            echo 'class="tombol-report"';
                                                          } ?>>
                <img class="img-fluid" src="<?= base_url('/public/assets/marketplace/'); ?>/images/ultrabook.jpg">
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="row pt-4">
          <?php foreach ($ultra as $bns) : ?>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 px-2">
              <a href="<?= base_url('/detail') . '/' . $bns['id_laptop']; ?>">
                <div class="card border-color border-0 shadow-card">
                  <div class="card-body pl-3 py-1 pr-0 pr-0">
                    <div class="div d-flex justify-content-center">
                      <img style="width: 140px; height: 130px" src="<?= base_url('/public/img/upload') . '/' . $bns['gambar']; ?>" alt="">
                    </div>
                    <p style="font-size: 14px;" class="font-hitam-500 card-title my-1"><?= $bns['merk'] . ' ' . $bns['seri']; ?></p>
                    <p class="card-text mt-0 mb-1 font-hitam-500" style="font-size: 12px;"><?= $bns['prosesor'] . '/' . $bns['ram'] . '/' . $bns['penyimpanan']; ?></p>
                    <p class="my-0 font-sewa">Biaya sewa</p>
                    <p class="mt-0 font-orange ">Rp <?php $harga = $bns['harga'] / 7;
                                                    echo number_format($harga, 0, ',', '.'); ?>/hari</p>
                  </div>
                </div>
              </a>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endsection('isi'); ?>