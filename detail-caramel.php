<?php include 'components/_head.php'?>

<section class="section-detail-headline panel bg-green">
  <div class="section-detail-headline-container">
    <div class="section-detail-headline-scene">
      <img id="headline_caramel" data-depth="0.10" src="assets/images/detail-headline-caramel.png" alt="">
      <img id="headline_caramel_kopi" data-depth="0.30" src="assets/images/detail-headline-kopi.png" alt="">
    </div>
  </div>
  <div class="img-sobek-container">
    <span id="action_sobek"></span>
    <div class="zip-container">
      <img id="sachet_a_1" src="assets/images/detail-caramel-sachet-a_1.png" alt="">
      <img id="sachet_a_2" src="assets/images/detail-caramel-sachet-a_2.png" alt="">
    </div>
    <img id="sachet_b" src="assets/images/detail-caramel-sachet-b.png" alt="">
  </div>
  <div class="headline-scroll">
    <span>SCROLL</span>
    <img src="assets/images/icon-scroll.png" alt="">
  </div>
</section>
<section class="bg-yellow row no-gutters align-items-center justify-content-center panel">
  <img id="caramel_hand" src="assets/images/Group 70.png" alt="">
  <div class="container">
    <div class="row">
      <div class="col-md-6"></div>
      <div class="col-md-6">
        <div class="detail-product-content">
          <div class="detail-product-content__title">RASA YANG MANTUL</div>
          <div class="detail-product-content__desc">
            Rasa caramel yang brazza di lidah dengan kopi susu yang creamvy abiz, Neo Coffee Caramel Macchiato! Selalu
            bikin hari-hari lo nggak biasa dan pastinya makin seru. Bisa lo nikmatin di mana aja dan kapan aja.
          </div>
          <br />
          <br />
          <br />
          <div class="detail-product-content__title">INGREDIENTS</div>
          <div class="detail-product-content__desc">
            Gula, Krimer Nabati, Kopi Bubuk Instan, Perisa Sintetik Karamel, Pemanis Buatan Sukralosa dan Asesulfam-K.
          </div>
          <br />
          <br />
          <br />
          <div class="detail-product-content__title">Servings: 1 (20g)</div>
          <div class="detail-product-content__desc">
            Tuang 1 sachet ke dalam gelas, tambahkan 150ml air panas, aduk dan siap dihidangkan.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'components/_commons-js.php'?>

<script>
var scene = document.querySelector('.section-detail-headline-scene');
var parallax = new Parallax(scene);
</script>


<?php include 'components/_footer.php'?>