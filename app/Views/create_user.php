<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="<?=base_url("assets/css/style.css")?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<html>
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
        <form action="<?=base_url('/user/store') ?>" method="POST">
        <div class="app-form">
            <div class="app-form-group">
              <input class="app-form-control" placeholder="NAME" name="nama">
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="NPM" name="npm">
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="KELAS" name="kelas">
            </div>
            <div class="app-form-group buttons">
              <button class="app-form-button">SEND</button>
        </form>
            </div>
          </div>
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
</html>
