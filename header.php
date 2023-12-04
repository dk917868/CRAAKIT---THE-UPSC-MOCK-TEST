<?php
include "./connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Craakit Competitive-Mock-Exams</title>
  <meta name="description" content="UPSC mock exams are practice tests designed to simulate the actual UPSC exam. They are meant to help candidates understand the exam pattern, the types of questions asked, and the level of difficulty., A subject-wise UPSC mock exam would have 100 questions, with each subject having a set number of questions. Candidates would be required to answer the questions within a stipulated time frame and get a score based on their performance. The mock exam would help candidates identify their strengths and weaknesses and work on their preparation accordingly., Mock exams are practice tests designed to simulate the actual UPSC civil services exam and help candidates prepare for it. Typically, mock exams consist of a series of multiple-choice questions that cover the topics and subjects that are included in the actual UPSC civil services exam.">
  <meta name="keywords" content="craakit, Craakit.com,UPSC civil services Mock Test, UPSC civil services mock exam, NEET mock exam, SAT Mock exam, JEE Mock test, JEE mains mock test, UPSC civil services subject wise mock test, UPSC civil services online preparation test">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-V1ZPZGHRFQ"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-V1ZPZGHRFQ');
  </script>

  <!-- Favicons -->
  <link href="./assets/img/craakit-icon.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/swiper-bundle.min.css">



  <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


  <!-- =======================================================
  * Template Name: Day - v4.10.0
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    #header {
      background: rgba(25, 25, 25, 0.95);
      transition: all 0.5s;
      z-index: 997;
      height: 90px;
    }

    #header .logo img {
      max-height: 90px;
    }

    #hero {
      width: 100%;
      height: calc(105vh);
      background: url("./assets/img/upsc_img1.jpg") top center;
      background-size: cover;
      position: relative;
    }


    section {
      padding: 20px 0;
      overflow: hidden;
    }

    .cta {
      background: linear-gradient(rgba(2, 2, 2, 0.5), rgba(0, 0, 0, 0.5)), url("./assets/img/upsc_img2.jpg") fixed center center;
      background-size: cover;
      padding: 120px 0;
    }

    /*slider css */
    .recent-photos {
      min-width: fit-content;
      overflow: hidden;
    }

    .recent-photos .swiper-pagination {
      margin-top: 20px;
      position: relative;
    }

    .recent-photos .swiper-pagination .swiper-pagination-bullet {
      width: 12px;
      height: 12px;
      background-color: #fff;
      opacity: 1;
      border: 1px solid #006fbe;
    }

    .recent-photos .swiper-pagination .swiper-pagination-bullet-active {
      background-color: #006fbe;
    }

    .recent-photos .owl-nav,
    .recent-photos .owl-dots {
      margin-top: 25px;
      text-align: center;
    }

    .recent-photos .owl-item {
      border-left: 2px solid #fff;
      border-right: 2px solid #fff;
    }

    .recent-photos .owl-dot {
      display: inline-block;
      margin: 0 5px;
      width: 12px;
      height: 12px;
      border-radius: 50%;
      background-color: #95d3ff !important;
    }

    .recent-photos .owl-dot.active {
      background-color: #006fbe !important;
    }

    .recent-photos .gallery-carousel .owl-stage-outer {
      overflow: visible;
    }

    .recent-photos .gallery-carousel .center {
      border: 6px solid #006fbe;
      margin: -10px;
      box-sizing: content-box;
      padding: 4px;
      background: #fff;
      z-index: 1;
    }

    /* important updates css */
    #updates {

      padding: 0;

    }

    .marquee {
      width: 83%;
      background: transparent;
      text-transform: initial;
      white-space: nowrap;
      overflow: hidden;
      position: relative;
    }

    .marquee div {
      color: #808080;
      font-size: 1.5rem;
      font-family: verdana;
      padding-left: 100%;
      display: inline-block;
      animation: animate 25s linear infinite;
    }

    @keyframes animate {
      100% {
        transform: translate(-80%, 0);
      }
    }

    @media (max-width:992px) {
      .marquee {
        width: 100%;
        background: transparent;
        text-transform: initial;
        white-space: nowrap;
        overflow: hidden;
        position: relative;
      }

      .marquee div {
        color: #808080;
        font-size: 1.5rem;
        font-family: verdana;
        padding-left: 100%;
        display: inline-block;
        animation: animate 25s linear infinite;
      }
    }

    /* course view css */

    .cardcontainer {
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-wrap: wrap;
      padding: 30px;
    }

    .cardcontainer .card {
      position: relative;
      max-width: 300px;
      height: 215px;
      background-color: #fff;
      margin: 30px 10px;
      padding: 20px 15px;

      display: flex;
      flex-direction: column;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.5);
      transition: 0.3s ease-in-out;
      border-radius: 15px;
    }

    .cardcontainer .card:hover {
      height: 320px;
    }


    .cardcontainer .card .image {
      position: relative;
      width: 260px;
      height: 260px;

      top: -10%;
      left: 8px;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .cardcontainer .card .image img {
      max-width: 100%;
      border-radius: 10px;
    }

    .cardcontainer .card .content {
      position: relative;
      top: -60px;
      padding: 10px 15px;
      color: #111;
      text-align: center;

      visibility: hidden;
      opacity: 0;
      transition: 0.3s ease-in-out;

    }

    .cardcontainer .card:hover .content {
      margin-top: 30px;
      visibility: visible;
      opacity: 1;
      transition-delay: 0.2s;

    }

    /* why us cta section */

    .whyuscta {
      background: linear-gradient(rgba(2, 2, 2, 0.5), rgba(0, 0, 0, 0.5)), url("./assets/img/whyus.jpg") fixed center center;
      background-size: cover;
      padding: 50px 0;
    }

    .whyuscta h3 {
      color: #ffc107;
      font-size: 28px;
      font-weight: 700;
      margin-left: 30%;
      padding-bottom: 30px;
    }

    .whyuscta p {
      color: #fff;
      margin-left: 35%;
      margin-right: 2%;
      text-align: justify;
    }


    .whyuscta .whyuscta-btn {
      font-family: "Raleway", sans-serif;
      text-transform: uppercase;
      font-weight: 500;
      font-size: 14px;
      letter-spacing: 1px;
      display: inline-block;
      padding: 10px 28px;
      transition: 0.5s;
      margin-top: 10px;
      margin-left: 30%;
      border: 2px solid #fff;
      color: #fff;
    }

    .whyuscta .whyuscta-btn:hover {
      background: #ffc107;
      border: 2px solid #cc1616;
    }

    @media (max-width: 598px) {
      .whyuscta h3 {
        color: #ffc107;
        font-size: 28px;
        font-weight: 700;
        margin-left: 5%;
        padding-bottom: 30px;
      }

      .whyuscta p {
        color: #fff;
        margin-left: 0;
        margin-right: 0;
        text-align: justify;
        padding: 10px 28px;
      }

      .whyuscta .whyuscta-btn {
        font-family: "Raleway", sans-serif;
        text-transform: uppercase;
        font-weight: 500;
        font-size: 14px;
        letter-spacing: 1px;
        display: inline-block;
        padding: 10px 28px;
        transition: 0.5s;
        margin-top: 10px;
        margin-left: 5%;
        border: 2px solid #fff;
        color: #fff;
      }

      .whyuscta .whyuscta-btn:hover {
        background: #ffc107;
        border: 2px solid #cc1616;
      }
    }

    /* testimonial */

    .card {
      box-shadow: 0px 4px 8px 0px #BDBDBD;
    }

    .profile-pic {
      width: 100px !important;
      height: 100px;
      box-shadow: 0px 4px 8px 0px #BDBDBD;
    }

    .owl-carousel .owl-nav button.owl-next,
    .owl-carousel .owl-nav button.owl-prev {
      background: 0 0;
      color: #1E88E5 !important;
      border: none;
      padding: 5px 20px !important;
      font: inherit;
      font-size: 50px !important;
    }

    .owl-carousel .owl-nav button.owl-next:hover,
    .owl-carousel .owl-nav button.owl-prev:hover {
      color: #0D47A1 !important;
      background-color: transparent !important;
    }

    .owl-dots {
      display: none;
    }

    button:focus {
      -moz-box-shadow: none !important;
      -webkit-box-shadow: none !important;
      box-shadow: none !important;
      outline-width: 0;
    }

    .item {
      display: none;
    }

    .next {
      display: block !important;
      position: relative;
      transform: scale(0.8);
      transition-duration: 0.3s;
      opacity: 0.6;
    }

    .prev {
      display: block !important;
      position: relative;
      transform: scale(0.8);
      transition-duration: 0.3s;
      opacity: 0.6;
    }

    .item.show {
      display: block;
      transition-duration: 0.4s;
    }

    .button {
      border: none;
      font-size: 16px;
      color: #FFF;
      padding: 8px 16px;
      background-color: #f44040;
      border-radius: 6px;
      margin: 14px;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .button:hover {
      background: #df1414;
    }

    @media screen and (max-width: 999px) {

      .next,
      .prev {
        transform: scale(1);
        opacity: 1;
      }

      .item {
        display: block !important;
      }
    }


    /*** Carousel ***/
    .carousel {
      position: relative;
    }

    .carousel.pointer-event {
      -ms-touch-action: pan-y;
      touch-action: pan-y;
    }

    .carousel-inner {
      position: relative;
      width: 100%;
      overflow: hidden;
    }

    .carousel-inner::after {
      display: block;
      clear: both;
      content: "";
    }

    .carousel-item {
      position: relative;
      display: none;
      float: left;
      width: 100%;
      margin-right: -100%;
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden;
      transition: -webkit-transform 0.6s ease;
      transition: transform 0.6s ease;
      transition: transform 0.6s ease, -webkit-transform 0.6s ease;
    }

    @media (prefers-reduced-motion: reduce) {
      .carousel-item {
        transition: none;
      }
    }

    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
      display: block;
    }

    .carousel-item-next:not(.carousel-item-left),
    .active.carousel-item-right {
      -webkit-transform: translateX(100%);
      transform: translateX(100%);
    }

    .carousel-item-prev:not(.carousel-item-right),
    .active.carousel-item-left {
      -webkit-transform: translateX(-100%);
      transform: translateX(-100%);
    }

    .carousel-fade .carousel-item {
      opacity: 0;
      transition-property: opacity;
      -webkit-transform: none;
      transform: none;
    }

    .carousel-fade .carousel-item.active,
    .carousel-fade .carousel-item-next.carousel-item-left,
    .carousel-fade .carousel-item-prev.carousel-item-right {
      z-index: 1;
      opacity: 1;
    }

    .carousel-fade .active.carousel-item-left,
    .carousel-fade .active.carousel-item-right {
      z-index: 0;
      opacity: 0;
      transition: opacity 0s 0.6s;
    }

    @media (prefers-reduced-motion: reduce) {

      .carousel-fade .active.carousel-item-left,
      .carousel-fade .active.carousel-item-right {
        transition: none;
      }
    }

    .carousel-control-prev,
    .carousel-control-next {
      position: absolute;
      top: 0;
      bottom: 0;
      z-index: 1;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-align: center;
      align-items: center;
      -ms-flex-pack: center;
      justify-content: center;
      width: 15%;
      padding: 0;
      color: #fff;
      text-align: center;
      background: none;
      border: 0;
      opacity: 0.5;
      transition: opacity 0.15s ease;
    }

    @media (prefers-reduced-motion: reduce) {

      .carousel-control-prev,
      .carousel-control-next {
        transition: none;
      }
    }

    .carousel-control-prev:hover,
    .carousel-control-prev:focus,
    .carousel-control-next:hover,
    .carousel-control-next:focus {
      color: #fff;
      text-decoration: none;
      outline: 0;
      opacity: 0.9;
    }

    .carousel-control-prev {
      left: 0;
    }

    .carousel-control-next {
      right: 0;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
      display: inline-block;
      width: 20px;
      height: 20px;
      background: 50% / 100% 100% no-repeat;
    }

    .carousel-control-prev-icon {
      background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E");
    }

    .carousel-control-next-icon {
      background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E");
    }

    .carousel-indicators {
      position: absolute;
      right: 0;
      bottom: 0;
      left: 0;
      z-index: 15;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-pack: center;
      justify-content: center;
      padding-left: 0;
      margin-right: 15%;
      margin-left: 15%;
      list-style: none;
    }

    .carousel-indicators li {
      box-sizing: content-box;
      -ms-flex: 0 1 auto;
      flex: 0 1 auto;
      width: 30px;
      height: 3px;
      margin-right: 3px;
      margin-left: 3px;
      text-indent: -999px;
      cursor: pointer;
      background-color: #fff;
      background-clip: padding-box;
      border-top: 10px solid transparent;
      border-bottom: 10px solid transparent;
      opacity: .5;
      transition: opacity 0.6s ease;
    }

    @media (prefers-reduced-motion: reduce) {
      .carousel-indicators li {
        transition: none;
      }
    }

    .carousel-indicators .active {
      opacity: 1;
    }

    .carousel-caption {
      position: absolute;
      right: 15%;
      bottom: 20px;
      left: 15%;
      z-index: 10;
      padding-top: 20px;
      padding-bottom: 20px;
      color: #fff;
      text-align: center;
    }

    @keyframes zoomIn {
      from {
        opacity: 0;
        transform: scale3d(.3, .3, .3);
      }

      50% {
        opacity: 1;
      }
    }

    .animated {
      animation-duration: 1s;
      animation-fill-mode: both;
    }

    .animated.infinite {
      animation-iteration-count: infinite;
    }

    .animated.hinge {
      animation-duration: 2s;
    }

    .animated.flipOutX,
    .animated.flipOutY,
    .animated.bounceIn,
    .animated.bounceOut {
      animation-duration: .75s;
    }

    @keyframes slideInDown {
      from {
        transform: translate3d(0, -100%, 0);
        visibility: visible;
      }

      to {
        transform: translate3d(0, 0, 0);
      }
    }

    .slideInDown {
      animation-name: slideInDown;
    }

    .zoomIn {
      animation-name: zoomIn;
    }

    @keyframes zoomInDown {
      from {
        opacity: 0;
        transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
        animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
      }

      60% {
        opacity: 1;
        transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
        animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
      }
    }

    .zoomInDown {
      animation-name: zoomInDown;
    }

    @keyframes zoomInLeft {
      from {
        opacity: 0;
        transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
        animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
      }

      60% {
        opacity: 1;
        transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
        animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
      }
    }

    .zoomInLeft {
      animation-name: zoomInLeft;
    }

    @keyframes zoomInRight {
      from {
        opacity: 0;
        transform: scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
        animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
      }

      60% {
        opacity: 1;
        transform: scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
        animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
      }
    }

    .zoomInRight {
      animation-name: zoomInRight;
    }

    @keyframes zoomInUp {
      from {
        opacity: 0;
        transform: scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
        animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
      }

      60% {
        opacity: 1;
        transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
        animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
      }
    }

    .zoomInUp {
      animation-name: zoomInUp;
    }

    .p-3 {
      padding: 10rem !important;
    }

    @media (max-width:1092px) {
      .p-3 {
        padding: 2rem !important;
      }
    }

    @media (max-width:568px) {
      .p-3 {
        padding: -1rem !important;
      }
    }


    /*** subject ***/
    .service-item {
      position: relative;
      height: 250px;
      padding: 30px 25px;
      background: #FFFFFF;
      box-shadow: 0 0 45px rgba(0, 0, 0, .08);
      transition: .5s;
    }

    .service-item:hover {
      background: goldenrod;
    }

    .service-item .service-icon {
      margin: 0 auto 20px auto;
      width: 90px;
      height: 90px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--light);
      background: url(./assets/img/icon-shape-primary.png) center center no-repeat;
      transition: .5s;
    }

    .service-item:hover .service-icon {
      color: var(--primary);
      background: url(./assets/img/icon-shape-white.png);
    }

    .service-item h5,
    .service-item p {
      transition: .5s;
    }

    .service-item:hover h5,
    .service-item:hover p {
      color: var(--light);
    }

    .service-item a.btn {
      position: relative;
      display: flex;
      color: var(--secondary);
      transition: .5s;
      z-index: 1;
    }

    .service-item:hover a.btn {
      color: var(--primary);
    }

    .service-item a.btn::before {
      position: absolute;
      content: "";
      width: 35px;
      height: 35px;
      top: 0;
      left: 0;
      border-radius: 35px;
      background: #DDDDDD;
      transition: .5s;
      z-index: -1;
    }

    .service-item:hover a.btn::before {
      width: 100%;
      background: var(--light);
    }
  </style>

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:deepaknayak684@gmail.com">info@craakit.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> +91 6370594157
      </div>
      <div class="social-links d-none d-md-block">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- <h1 class="logo"><a href="#">Craakit</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.php" class="logo"><img src="assets/img/craakit-imgz.png" alt="craakit-logo" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="./index.php">Home</a></li>

          <!-- <li><a class="nav-link scrollto" href="#services">Services</a></li> -->
          <!-- <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li> -->

          <li class="dropdown"><a href="#"><span>Test Series</span> <i class="bi bi-chevron-down"></i></a>
            <ul>

              <li class="dropdown"><a href="#"><span>UPSC civil Services(IAS/IPS/IRS)</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li class="dropdown"><a href="#"><span>Prelims Mock Test</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li><a href="./subscription.php">GS-1</a></li>
                      <li><a href="./subscription.php">Aptitude(CSAT)</a></li>
                    </ul>
                </ul>
              </li>
              <li><a href="./subscription.php">NEET</a></li>
              <li><a href="./subscription.php">CAT</a></li>
              <li><a href="./subscription.php">JEE</a></li>
            </ul>
          <li><a class="nav-link scrollto" href="#announcements">Announcements</a></li>
          <li><a class="nav-link scrollto" href="#courses">Courses</a></li>
          <li><a class="nav-link scrollto" href="#whyuscta">About Us</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="./dashboard/login.php">Login</a></li>
          <li><a class="nav-link scrollto" href="./dashboard/register.php">Register</a></li>



        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->