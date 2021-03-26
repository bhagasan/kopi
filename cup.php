<?php include 'components/_head.php'?>


<section class="section--home bg-red">
  <div class="section-detail-headline-container">
    <div class="section-detail-headline-scene">
      <img id="headline_caramel" data-depth="0.10" src="assets/images/detail-mocha-headline-cokelat.png" alt="">
      <img id="headline_caramel_kopi" data-depth="0.30" src="assets/images/detail-tiramisu-headline-biji.png" alt="">
    </div>
  </div>
  <div id="trigger1"></div>
  <div id="trigger2"></div>
  <div id="trigger3"></div>
  <div id="trigger4"></div>
  <div id="trigger5"></div>
  <div class="img-sobek-container" id="sachet_main">
    <span id="action_sobek"></span>
    <div class="zip-container" id="sachet_a_2">
      <img id="sachet_a_1" src="assets/images/detail-caramel-sachet-a_1.png" alt="">
      <img src="assets/images/detail-caramel-sachet-a_2.png" alt="">
    </div>
    <img id="butiran" src="assets/images/butiran.png" alt="">
    <img id="sachet_b" src="assets/images/detail-mocha-sachet-b.png" alt="">
    <img id="cup_fill" src="assets/images/cup-animation.png" alt="">
  </div>
  <div class="headline-scroll">
    <span>SCROLL</span>
    <img src="assets/images/icon-scroll.png" alt="">
  </div>
</section>
<section class="panel yellow">
  <div class="section__title">Title One</div>
</section>
<section class="panel yellow">
  <div class="section__title">Title Two</div>
</section>
<section class="panel yellow">
  <div class="section__title">Title Three</div>
</section>
<section class="panel yellow">
  <div class="section__title">Title Four</div>
</section>

<footer class="footer bg-black">
  <div class="container-fluid">
    <div class="row justify-content-between">
      <div class="col-md-3 text-center text-md-left">
        <img class="logo-wings" src="assets/images/logo-wings.png" alt="">
        <p class="footer__address">
          PT.SAYAP MAS UTAMA<br />
          JL.TIPAR CAKUNG KAV.F 5-7<br />
          EAST JAKARTA 13910<br />
          INDONESIA
        </p>
        <div class="footer__social-media mb-4">
          <div class="row w-100">
            <div class="col-3">
              <a href="#">
                <img src="assets/images/facebook.png" alt="">
              </a>
            </div>
            <div class="col-3">
              <a href="#">
                <img src="assets/images/insta.png" alt="">
              </a>
            </div>
            <div class="col-3">
              <a href="#">
                <img src="assets/images/twitter.png" alt="">
              </a>
            </div>
            <div class="col-3">
              <a href="#">
                <img src="assets/images/youtube.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-9">
        <div class="footer__menu">
          <div class="row text-center text-md-right justify-content-end">
            <div class="col-lg-auto col-12">
              <a href="#">About</a>
            </div>
            <div class="col-lg-auto col-12">
              <a href="#">Blog</a>
            </div>
            <div class="col-lg-auto col-12">
              <a href="#">Contact Us</a>
            </div>
            <div class="col-lg-auto col-12">
              <a href="#">FAQ</a>
            </div>
            <div class="col-lg-auto col-12">
              <a href="#">Newsletter</a>
            </div>
            <div class="col-lg-auto col-12">
              <a href="#">Subscription</a>
            </div>
            <div class="col-lg-auto col-12">
              <a href="#">Social Media</a>
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-lg-6 col-md-8">
              <div class="input-group foem-email mt-5 d-sm-flex d-block">
                <input type="text" class="form-control underline text-center" placeholder="Email Address"
                  aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append mt-2 mb-5 mt-mb-0 mt-md-0">
                  <button class="btn btn-white" type="button">Subscribe</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-between copyright">
      <div class="col-lg-3 col-md-5">
        <div class="row text-center text-md-left mb-2 mb-md-0">
          <div class="col-6">
            <a href="#">Term & Condition</a>
          </div>
          <div class="col-6">
            <a href="#">Privacy Policy</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 text-md-right text-center">
        <span>Copyright &copy;2020 PT.SAYAP MAS UTAMA</span>
      </div>
    </div>
  </div>
</footer>

<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/TweenMax.min.js"></script>
<script src="assets/js/ScrollMagic.min.js"></script>
<script src="assets/js/animation.gsap.js"></script>
<script src="assets/js/debug.addIndicators.js"></script>
<script src="assets/js/parallax.min.js"></script>
<script src="assets/js/main.js"></script>


<script>
var scene = document.querySelector('.section-detail-headline-scene');
var parallax = new Parallax(scene);
</script>



<script>
var controller = new ScrollMagic.Controller({
  globalSceneOptions: {
    triggerHook: 'onLeave',
    // duration: "100%"
  }
});
</script>

<script>
$(function() {

  var sachet_a_1 = TweenMax.to("#sachet_a_1", 0.5, {
    rotation: 5,
    ease: Linear.easeNone
  });
  var sachet_a_2 = TweenMax.to("#sachet_a_2", 0.5, {
    rotation: 14,
    opacity: 0,
    ease: Linear.easeNone
  });

  var sachet_b = TweenMax.to("#sachet_b", 0.5, {
    rotation: -116,
    x: 180,
    y: -280,
    ease: Linear.easeNone
  });

  var cup_fill = TweenMax.to("#cup_fill", 0.5, {
    opacity: 1,
    y: 100,
    ease: Linear.easeNone
  });
  var butiran = TweenMax.to("#butiran", 0.5, {
    opacity: 1,
    ease: Linear.easeNone
  });


  var zipper_a = new ScrollMagic.Scene({
      triggerElement: "#trigger1",
      duration: 500,
    })
    .setTween(sachet_a_1)
    // .addIndicators({
    //   name: "1"
    // })
    .addTo(controller);

  var zipper_b = new ScrollMagic.Scene({
      triggerElement: "#trigger2",
      duration: 100
    })
    .setTween(sachet_a_2)
    // .addIndicators({
    //   name: "2"
    // })
    .addTo(controller);

  var sachet_b_scene = new ScrollMagic.Scene({
      triggerElement: "#trigger3",
      duration: 500
    })
    .setTween(sachet_b)
    // .addIndicators({
    //   name: "3"
    // })
    .addTo(controller);

  var cup_fill_scene = new ScrollMagic.Scene({
      triggerElement: "#trigger4",
      duration: 500
    })
    .setTween(cup_fill)
    // .addIndicators({
    //   name: "4"
    // })
    .addTo(controller);

  var butiran_scene = new ScrollMagic.Scene({
      triggerElement: "#trigger5",
      duration: 1000
    })
    .setTween(butiran)
    // .addIndicators({
    //   name: "5"
    // })
    .addTo(controller);





  // secction
  var slides = document.querySelectorAll("section.panel");

  // create scene for every slide
  for (var i = 0; i < slides.length; i++) {
    new ScrollMagic.Scene({
        triggerElement: slides[i]
      })
      .setPin(slides[i], {
        pushFollowers: false
      })
      // .addIndicators()
      .addTo(controller);
  }


});
</script>
</body>

</html>