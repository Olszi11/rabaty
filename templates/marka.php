
<body>
  <?php
    include('modules/menu.php');
  ?>
  <input type="hidden" id="form-user_id" name="user_id" value="" />
  <input type="hidden" id="form-rating" name="rating-score" />
  <main class="main">
    <!--section brand-->
    <section class="section section--padding-s brand" id="brand">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <div class="row">
              <div class="col-lg-12 offset-lg-0">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="brand__container">
                      <div class="brand__name-content">
                        <div class="brand__name-like">
                          <p class="brand__name">Nike</p>
                          <div class="brand__like">
                              <svg version="1.2" preserveAspectRatio="none" viewBox="0 0 24 24" class="ng-element" data-id="1545c0adb72e4c57b69c3002a8cdb8d2" style="opacity: 1; mix-blend-mode: normal; fill: rgb(235, 33, 55);"><g><path class="brand__heart" xmlns:default="http://www.w3.org/2000/svg" d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z" style="fill: rgb(235, 33, 55);"></path></g></svg>
                          </div>
                        </div>

                        <div class="brand__stars">
                          <svg version="1.1" id="Warstwa_1" 
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
                            <path class="brand__star" d="M95,39.9H60.6L50,7.2L39.4,39.9H5l27.8,20.2L22.2,92.8L50,72.6l27.8,20.2L67.2,60.1L95,39.9z M50,65.6L32.9,78l6.5-20.1
                        L22.4,45.5h21.1L50,25.5l6.5,20.1h21.1L60.5,57.9L67.1,78L50,65.6z"/>
                            <polygon class="brand__halfstar" data-score="0.5" class="st1" points="50,20.5 50,69.6 27.1,85.6 36.5,59.4 14,42.7 42.5,42.6 	 "/>
                            <polygon class="brand__halfstar" data-score="1" class="st2" points="49.6,18.5 49.6,70.2 72.9,85.6 63.5,59.4 86,42.7 57.5,42.6 	"/>
                          </svg>
                          <svg version="1.1" id="Warstwa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
                            <path class="brand__star" d="M95,39.9H60.6L50,7.2L39.4,39.9H5l27.8,20.2L22.2,92.8L50,72.6l27.8,20.2L67.2,60.1L95,39.9z M50,65.6L32.9,78l6.5-20.1
                        L22.4,45.5h21.1L50,25.5l6.5,20.1h21.1L60.5,57.9L67.1,78L50,65.6z"/>
                            <polygon class="brand__halfstar" data-score="1.5" class="st1" points="50,20.5 50,69.6 27.1,85.6 36.5,59.4 14,42.7 42.5,42.6 	 "/>
                            <polygon class="brand__halfstar" data-score="2" class="st2" points="49.6,18.5 49.6,70.2 72.9,85.6 63.5,59.4 86,42.7 57.5,42.6 	"/>
                          </svg>
                          <svg version="1.1" id="Warstwa_1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
                            <path class="brand__star" d="M95,39.9H60.6L50,7.2L39.4,39.9H5l27.8,20.2L22.2,92.8L50,72.6l27.8,20.2L67.2,60.1L95,39.9z M50,65.6L32.9,78l6.5-20.1
                        L22.4,45.5h21.1L50,25.5l6.5,20.1h21.1L60.5,57.9L67.1,78L50,65.6z"/>
                            <polygon class="brand__halfstar" data-score="2.5" class="st1" points="50,20.5 50,69.6 27.1,85.6 36.5,59.4 14,42.7 42.5,42.6 	 "/>
                            <polygon class="brand__halfstar" data-score="3" class="st2" points="49.6,18.5 49.6,70.2 72.9,85.6 63.5,59.4 86,42.7 57.5,42.6 	"/>
                          </svg>
                          <svg version="1.1" id="Warstwa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
                            <path class="brand__star" d="M95,39.9H60.6L50,7.2L39.4,39.9H5l27.8,20.2L22.2,92.8L50,72.6l27.8,20.2L67.2,60.1L95,39.9z M50,65.6L32.9,78l6.5-20.1
                        L22.4,45.5h21.1L50,25.5l6.5,20.1h21.1L60.5,57.9L67.1,78L50,65.6z"/>
                            <polygon class="brand__halfstar" data-score="3.5" class="st1" points="50,20.5 50,69.6 27.1,85.6 36.5,59.4 14,42.7 42.5,42.6 	 "/>
                            <polygon class="brand__halfstar" data-score="4" class="st2" points="49.6,18.5 49.6,70.2 72.9,85.6 63.5,59.4 86,42.7 57.5,42.6 	"/>
                          </svg>
                          <svg version="1.1" id="Warstwa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
                            <path class="brand__star" d="M95,39.9H60.6L50,7.2L39.4,39.9H5l27.8,20.2L22.2,92.8L50,72.6l27.8,20.2L67.2,60.1L95,39.9z M50,65.6L32.9,78l6.5-20.1
                        L22.4,45.5h21.1L50,25.5l6.5,20.1h21.1L60.5,57.9L67.1,78L50,65.6z"/>
                            <polygon class="brand__halfstar" data-score="4.5" class="st1" points="50,20.5 50,69.6 27.1,85.6 36.5,59.4 14,42.7 42.5,42.6 	 "/>
                            <polygon class="brand__halfstar" data-score="5" class="st2" points="49.6,18.5 49.6,70.2 72.9,85.6 63.5,59.4 86,42.7 57.5,42.6 	"/>
                          </svg>
                        </div>
                      </div><!--brand name content-->


                      <div class="brand__text">
                          <p class="brand__desc">Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki. Pięć wieków później zaczął być używany przemyśle elektronicznym, pozostając praktycznie niezmienionym.</p>
                      </div>
                      <div class="brand__similar">
                          <p class="brand__similar-text">Podobne marki:</p>
                          <a class="brand__similar-link" href=""><img class="brand__similar-img" src="/assets/img/newbalance.png"></a>
                          <a class="brand__similar-link" href=""><img class="brand__similar-img" src="/assets/img/allegro.png"></a>
                          <a class="brand__similar-link" href=""><img class="brand__similar-img" src="/assets/img/allegro.png"></a>
                      </div>
                    </div><!--brand container-->
                  </div><!--col-lg-6-->
                  <div class='col-lg-6'>
                    <div class="brand__banner flexend">
                      <img src="/assets/img/banner.jpg" class="banner">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--end brand-->
    <!--start all-offers-->
    <?php
      include('modules/all-offers.php');
    ?>
    <!--end all-offers-->
    <!--section similar code-->
    <?php
      include('modules/similar-codes.php');
    ?>
    <!--end section similar coupon-->
  </main>