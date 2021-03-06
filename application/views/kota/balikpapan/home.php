<!DOCTYPE html>
<html>

<head>
  <title>BALIKPAPAN</title>
  <link rel="icon" href="<?= base_url() ?>assets/dist/img/balikpapan.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    * {
      box-sizing: border-box;
      padding: 0;
      margin: 0;
    }

    body {
      font-family: Verdana, sans-serif;
    }

    .mySlides {
      display: none;
    }

    img {
      vertical-align: middle;
    }

    html {
      height: 100%;
    }

    html,
    body,
    iframe,
    #fullheight {
      min-height: 100% !important;
      height: 100vh;
      overflow-x: hidden;
      overflow-y: hidden;
    }

    #fullheight {
      width: 250px;
      background: blue;
    }

    /* Slideshow
       container */
    .slideshow-container {
      width: 100%;
      height: auto;
      position: relative;
      margin: auto;
    }

    /* Caption text */
    .text {
      color: #f2f2f2;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    .active {
      background-color: #717171;
    }

    /* Fading animation */
    .fade {
      -webkit-animation-name: fade;
      -webkit-animation-duration: 1.5s;
      animation-name: fade;
      animation-duration: 1.5s;
    }

    @-webkit-keyframes fade {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }

    @keyframes fade {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
      .text {
        font-size: 11px
      }
    }
  </style>
</head>

<body>

  <div class="slideshow-container">

    <div class="mySlides fade">
      <iframe src="http://iku.menlhk.go.id/map/" height="100%" width="100%" style="display: block;"></iframe>
    </div>

    <div class="mySlides fade">
      <iframe src="<?= site_url('chart') ?>" height="100%" width="100%" style="display: block;"></iframe>
    </div>

  </div>
  <br>

  <script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {
        slideIndex = 1
      }
      for (i = 0; i < dots.length; i++) {
        // dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      // dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 30000); // Change image every 2 seconds
    }
  </script>

</body>

</html>