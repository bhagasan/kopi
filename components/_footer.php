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







<script>
var controller = new ScrollMagic.Controller({
  globalSceneOptions: {
    triggerHook: 'onLeave',
    duration: "500%"
  }
});
</script>

<script>
$(function() {

  //   var coffee = TweenMax.to("#coffee", 0.5, {
  //     scaleY: 160,
  //     ease: Linear.easeNone
  //   });

  var slides = document.querySelectorAll("section.panel");

  //   // create scene for every slide
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


  //   var cup = new ScrollMagic.Scene({
  //       triggerElement: "#trigger1",
  //       duration: 400
  //     })
  //     .setTween(coffee)
  //     // .addIndicators({
  //     //   name: "1 (duration: 300)"
  //     // })
  //     .addTo(controller);


});
</script>
</body>

</html>