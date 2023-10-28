<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-left">
          <div class="screen-header-button close"></div>
          <div class="screen-header-button maximize"></div>
          <div class="screen-header-button minimize"></div>
        </div>
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <div class="app-title">
            <span>FORM DATA</span>
          </div>
        </div>
        <div class="screen-body-item">
            <form action="<?= base_url('kelas/' . $kelas['id']) ?>" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <?= csrf_field() ?>
                <input class="app-form-control mb-5 <?= ($validation->hasError('nama_kelas')) ? 
                'is-invalid' : ''; ?>" placeholder="NAMA KELAS" name="nama_kelas" value="<?= $kelas['nama_kelas']?>">
                <div class="invalid-feedback">
                    <p style="color:#999;">The Name Field is Required!</p>
                </div>
                <div class="app-form-group buttons mb-3">
                    <button class="app-form-button">SEND</button>
                </div>
            </form>
        </div>
      </div>
    </div>
    <div class="credits">
      inspired by
      <a class="credits-link" href="https://dribbble.com/shots/2666271-Contact" target="_blank">
        <svg class="dribbble" viewBox="0 0 200 200">
          <g stroke="#ffffff" fill="none">
            <circle cx="100" cy="100" r="90" stroke-width="20"></circle>
            <path d="M62.737004,13.7923523 C105.08055,51.0454853 135.018754,126.906957 141.768278,182.963345" stroke-width="20"></path>
            <path d="M10.3787186,87.7261455 C41.7092324,90.9577894 125.850356,86.5317271 163.474536,38.7920951" stroke-width="20"></path>
            <path d="M41.3611549,163.928627 C62.9207607,117.659048 137.020642,86.7137169 189.041451,107.858103" stroke-width="20"></path>
          </g>
        </svg>
      </a>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
