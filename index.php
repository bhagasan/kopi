<?php include 'components/_head.php'?>

<!-- <section class="section--home">
  <div class="spacer s2"></div>
  <div id="trigger1" class="spacer s0"></div>
  <div id="pin1">
    <div id="coffee"></div>
  </div>
</section> -->
<section class="section-headline panel bg-red">
  <div class="container">
    <div class="headline-text__container">
      <img src="assets/images/ini-mau-gue.png" alt="">
    </div>
    <div class="kopi kopi-1"><img src="assets/images/headline-kopi-1.png" alt=""></div>
    <div class="kopi kopi-2"><img src="assets/images/headline-kopi-2.png" alt=""></div>
    <div class="kopi kopi-3"><img src="assets/images/headline-kopi-tangan.png" alt=""></div>
  </div>
  <div class="parallax__container">
    <div class="parallax-scene">
      <div class="img-1" data-depth="0.10"><img src="assets/images/biji-kopi-1.png"></div>
      <div class="img-2" data-depth="0.30"><img src="assets/images/biji-kopi-2.png"></div>
      <div class="img-3" data-depth="0.20"><img src="assets/images/biji-kopi-3.png"></div>
      <div class="img-4" data-depth="0.40"><img src="assets/images/biji-kopi-4.png"></div>
    </div>
  </div>

  <div class="headline-scroll">
    <span>SCROLL</span>
    <img src="assets/images/icon-scroll.png" alt="">
  </div>
</section>
<section class="section-home-product panel yellow">
  <div class="sub-section">
    <img id="camera_section1" src="assets/images/camera.png" alt="">
    <img id="foto_section1" src="assets/images/foto.png" alt="">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="section__title mt-400">LOREM IPSUM</div>
          <div class="section__desc">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore
            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
            commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
            pariatur.
          </div>
        </div>
        <div class="col-md-6">
          <img id="cap_section1" src="assets/images/cap-camera.png" alt="">
          <img id="coffee_section1" src="assets/images/coffee-caramel.png" alt="">
          <img id="coffee-sachet_section1" src="assets/images/caramel-pack-1.png" alt="">
        </div>
      </div>
    </div>
  </div>
  <div class="sub-section">
    <img id="mic_section2" src="assets/images/mic.png" alt="">
    <img id="kacamata_section2" src="assets/images/kacamata.png" alt="">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img id="coffee_section2" src="assets/images/coffee-2.png" alt="">
          <img id="sachet_section2" src="assets/images/mocchachino-sachet.png" alt="">
        </div>
        <div class="col-md-6">
          <div class="section__title">LOREM IPSUM</div>
          <div class="section__desc mb-400">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat.
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="sub-section">
    <img id="spoons_section2" src="assets/images/measuring-spoon.png" alt="">
    <img id="whisk_section2" src="assets/images/hand-whisk.png" alt="">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="section__title mt-300">LOREM IPSUM</div>
          <div class="section__desc mb-200">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat.
          </div>
        </div>
        <div class="col-md-6">
          <img id="coffee_section3" src="assets/images/coffee-tiramisu.png" alt="">
          <img id="sachet_section3" src="assets/images/sachet-3.png" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
<section class="panel"></section>


<?php include 'components/_commons-js.php'?>

<script>
var scene = document.querySelector('.parallax-scene');
var parallax = new Parallax(scene);
</script>

<?php include 'components/_footer.php'?>