<?php include 'components/_head.php'?>

<section class="panel bg-brown">
  <div class="col-7 mt-5 mb-5 ml-auto mr-auto text-center">
    <img src="assets/images/recipe-main-title.png" class="mt-5" alt="">
  </div>
  <div class="col-12">
    <p class="ml-auto mr-auto mb-5 recipe-desc text-center">
      Bosen nikmatin kopi yang itu-itu aja? Don't worry, be happy! Sekarang, lo bisa bebas
      bereksperimen buat nikmatin Neo Coffee sesuai kemauan lo.
      So, what are you waitting for? Check out the recipe below!
    </p>
  </div>
  <div class="swiper-container slide-recipe-container section-1">
    <div class="swiper-wrapper">
      <div class="swiper-slide recipe-slide scale">
        <img src="assets/images/recipe-1-a.png" alt="" />
      </div>
      <div class="swiper-slide recipe-slide scale">
        <img src="assets/images/recipe-1-b.png" alt="" />
      </div>
      <div class="swiper-slide recipe-slide scale">
        <img src="assets/images/recipe-1-c.png" alt="" />
      </div>
    </div>
    <div class="swiper-button-next swiper-button-next-1"></div>
    <div class="swiper-button-prev swiper-button-prev-1"></div>
  </div>
</section>
<section class="panel bg-brown">
  <div class="col-12">
    <img src="assets/images/hot-text.png" class="d-block section-recipe-title mr-auto ml-auto mt-5" alt="" />
  </div>
  <div class="swiper-container slide-recipe-container section-2">
    <div class="swiper-wrapper">
      <div class="swiper-slide recipe-slide">
        <img src="assets/images/hot-1.png" alt="">
      </div>
      <div class="swiper-slide recipe-slide">
        <img src="assets/images/hot-2.png" alt="">
      </div>
      <div class="swiper-slide recipe-slide">
        <img src="assets/images/hot-3.png" alt="">
      </div>
      <div class="swiper-slide recipe-slide">
        <img src="assets/images/hot-4.png" alt="">
      </div>
      <div class="swiper-slide recipe-slide">
        <img src="assets/images/hot-5.png" alt="">
      </div>
      <div class="swiper-slide recipe-slide">
        <img src="assets/images/hot-6.png" alt="">
      </div>
    </div>
    <div class="swiper-button-next swiper-button-next-2"></div>
    <div class="swiper-button-prev swiper-button-prev-2"></div>
  </div>
</section>
<section class="panel bg-brown">
  <div class="col-12">
    <img src="assets/images/cold-text.png" class="d-block section-recipe-title mr-auto ml-auto mt-5" alt="" />
  </div>
  <div class="swiper-container slide-recipe-container section-3">
    <div class="swiper-wrapper">
      <div class="swiper-slide recipe-slide">
        <img src="assets/images/cold-1.png" alt="">
      </div>
      <div class="swiper-slide recipe-slide">
        <img src="assets/images/cold-2.png" alt="">
      </div>
      <div class="swiper-slide recipe-slide">
        <img src="assets/images/cold-3.png" alt="">
      </div>
      <div class="swiper-slide recipe-slide">
        <img src="assets/images/cold-4.png" alt="">
      </div>
      <div class="swiper-slide recipe-slide">
        <img src="assets/images/cold-5.png" alt="">
      </div>
      <div class="swiper-slide recipe-slide">
        <img src="assets/images/cold-6.png" alt="">
      </div>
    </div>
    <div class="swiper-button-next swiper-button-next-3"></div>
    <div class="swiper-button-prev swiper-button-prev-3"></div>
  </div>
</section>
<section class="panel bg-brown">
  <div class="col-12">
    <img src="assets/images/food-text.png" class="d-block section-recipe-title mr-auto ml-auto mt-5" alt="" />
  </div>
  <div class="swiper-container slide-recipe-container section-4">
    <div class="swiper-wrapper">
      <div class="swiper-slide recipe-slide">
        <img src="assets/images/hot-1.png" alt="">
      </div>
      <div class="swiper-slide recipe-slide">
        <img src="assets/images/food-2.png" alt="">
      </div>
      <div class="swiper-slide recipe-slide">
        <img src="assets/images/food-3.png" alt="">
      </div>
      <div class="swiper-slide recipe-slide">
        <img src="assets/images/food-4.png" alt="">
      </div>
      <div class="swiper-slide recipe-slide">
        <img src="assets/images/food-5.png" alt="">
      </div>
      <div class="swiper-slide recipe-slide">
        <img src="assets/images/food-6.png" alt="">
      </div>
    </div>
    <div class="swiper-button-next swiper-button-next-4"></div>
    <div class="swiper-button-prev swiper-button-prev-4"></div>
  </div>
</section>

<?php include 'components/_commons-js.php'?>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
var swiper = new Swiper('.section-1', {
  slidesPerView: 1,
  spaceBetween: 30,
  initialSlide: 1,
  centeredSlides: true,
  breakpoints: {
    414: {
      slidesPerView: 2,
      spaceBetween: 0,
    },
    768: {
      slidesPerView: 3,
    }
  },
  pagination: {
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next-1',
    prevEl: '.swiper-button-prev-1',
  },
});
</script>

<script>
var swiper2 = new Swiper('.section-2', {
  slidesPerView: 1,
  direction: 'horizontal',
  spaceBetween: 0,
  navigation: {
    nextEl: '.swiper-button-next-2',
    prevEl: '.swiper-button-prev-2',
  },
  breakpoints: {
    414: {
      slidesPerView: 2,
      slidesPerColumn: 2,
      slidesPerColumnFill: 'row',
    },
    768: {
      slidesPerView: 3,
      slidesPerColumnFill: 'row',
      slidesPerColumn: 2,
    }
  }
});
</script>

<script>
var swiper3 = new Swiper('.section-3', {
  slidesPerView: 3,
  direction: 'horizontal',
  slidesPerColumn: 2,
  spaceBetween: 0,
  slidesPerColumnFill: 'row',
  navigation: {
    nextEl: '.swiper-button-next-3',
    prevEl: '.swiper-button-prev-3',
  },
  breakpoints: {
    414: {
      slidesPerView: 2,
      slidesPerColumn: 2,
      slidesPerColumnFill: 'row',
    },
    768: {
      slidesPerView: 3,
      slidesPerColumnFill: 'row',
      slidesPerColumn: 2,
    }
  }
});
</script>

<script>
var swiper4 = new Swiper('.section-4', {
  slidesPerView: 3,
  direction: 'horizontal',
  slidesPerColumn: 2,
  spaceBetween: 0,
  slidesPerColumnFill: 'row',
  navigation: {
    nextEl: '.swiper-button-next-4',
    prevEl: '.swiper-button-prev-4',
  },
  breakpoints: {
    414: {
      slidesPerView: 2,
      slidesPerColumn: 2,
      slidesPerColumnFill: 'row',
    },
    768: {
      slidesPerView: 3,
      slidesPerColumnFill: 'row',
      slidesPerColumn: 2,
    }
  }
});
</script>

<script>
var scene = document.querySelector('.section-detail-headline-scene');
var parallax = new Parallax(scene);
</script>


<?php include 'components/_footer.php'?>