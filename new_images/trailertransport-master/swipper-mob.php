<style>
  .swiper {
    width: 100%;
    padding-top: 100px;
    padding-bottom: 50px;
  }

  .swiper-slide {

    background-position: center;
    background-size: cover;
    position: relative;
    width: 650px;
    height: 480px;
    transform: translate3d(0) !important;

  }
  .swip-content {
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, .4);
    position: absolute;
    display: grid;
    place-items: center;

    z-index: 1;
    color: white;
    font-size: 2rem;
  }

  .swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    border-radius: 2.2%;
    box-shadow: #0000006b 0px 2px 10px;
  }

  .swiper-slide {
    opacity: .6 !important;
    margin-bottom: 2% !important;
  }

  .swiper-slide.swiper-slide-active {
    transform: scale(1.2) !important;
    opacity: 1 !important;
  }



  .our-recent {
    font-size: 50px;
    letter-spacing: 1px;
    line-height: 54px;
    color: #131b34;
    font-weight: 700;
    font-family: "Inter";
    text-align: center;
    margin-bottom: 1%;
  }

  .our-recent-paragraph {
    font-size: 25px;
    letter-spacing: 0px;
    line-height: 29px;
    color: #00103d;
    font-weight: 400;
    font-family: "Inter";
    text-align: center;
    width: 1100px;
    margin: auto;
    margin-bottom: 100px;
    margin-top: 1.5%;
  }

  .swipper-border {
    border: 2.8px solid;
    border-image: linear-gradient(to right, #21d0b3, #1ecff5) 1;
    width: 10%;
    margin: auto;
  }

  .swipper-button1 .our-button {
    margin: auto;
    justify-content: center;
    display: flex;
    background-color: #21D0B3;
    color: white;
    margin-top: 50px;
    font-size: 20px;
    padding: 1% 1.5%;
    border: #21D0B3 3px solid;
  }

  @media (max-width: 1440px) {
    .our-recent-paragraph {
      font-size: 20px;
      line-height: 29px;
    }

    .our-recent {
      font-size: 40px;

    }

    .swipper-border {
      height: 2px;
    }

    .swiper-slide {
      width: 450px;
      height: 350px;
    }
  }

  @media only screen and (max-width: 450px) {
    .our-recent-paragraph {
      width: 90%;
      font-size: 16px;
    }

    .swipper-border {
      width: 55%;
    }

    .swiper {
      margin-top: 0px;
    }
  }

  @media only screen and (max-width: 320px) {
    .swiper {
      padding-top: 30px;
    }
  }
</style>
</head>

<body>
  <!-- Swiper -->
  <div class="swiper mySwiper" style="background-color: white;">
    <div class="swipper-content">
      <h3 class="our-recent">Discover Our Way to Impactful Work</h3>
      <div class="swipper-border"></div>
      <p class="our-recent-paragraph">See our product development journey helping our clients open new opportunities and
        drive growth. Our solutions are conditioned with your customers’ voices. </p>
    </div>
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <!-- <div class="swip-content">Hello</div> -->
        <img src="./images/Layer 37.webp" />
      </div>
      <div class="swiper-slide">
        <!-- <div class="swip-content">Hello</div> -->
        <img src="./images/Layer 37.webp" />
      </div>
      <div class="swiper-slide">
        <!-- <div class="swip-content">Hello</div> -->
        <img src="./images/Layer 37.webp" />
      </div>
      <div class="swiper-slide">
        <div class="swip-content">
          <h3>Lorim Ipsum</h3>
          <p></p>
        </div>
        <img src="./images/Layer 89.webp" />
      </div>
      <div class="swiper-slide">
        <!-- <div class="swip-content">Hello</div> -->
        <img src="./images/Layer 37.webp" />
      </div>
      <div class="swiper-slide">
        <!-- <div class="swip-content">Hello</div> -->
        <img src="./images/Layer 37.webp" />
      </div>
      <div class="swiper-slide">
        <!-- <div class="swip-content">Hello</div> -->
        <img src="./images/Layer 37.webp" />
      </div>
      <div class="swiper-slide">
        <!-- <div class="swip-content">Hello</div>  -->
        <img src="./images/Layer 37.webp" />
      </div>
    </div>

  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      loop: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },

      autoplay: {
        delay: 3000, // Time in milliseconds between slides
        disableOnInteraction: false, // Set to false so autoplay will not be stopped when the user interacts with the slider
      },
      breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 1,
          spaceBetween: 20
        },
        // when window width is >= 480px
        480: {
          slidesPerView: 1,
          spaceBetween: 30
        },
        // when window width is >= 640px
        640: {
          slidesPerView: 2,
          spaceBetween: 40
        }
      },
    });
  </script>