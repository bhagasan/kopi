<?php include 'components/_head.php'?>

<section class="section-detail-headline bg-green">
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
      <div class="col-md-6">A</div>
      <div class="col-md-6">B</div>
    </div>
  </div>
</section>

<?php include 'components/_commons-js.php'?>

<script>
var scene = document.querySelector('.section-detail-headline-scene');
var parallax = new Parallax(scene);
</script>


<?php include 'components/_footer.php'?>