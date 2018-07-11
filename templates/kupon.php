
<body>
  <?php
    include('modules/menu.php');
  ?>
 
    <!--section coupon-->
    <section class="section section--padding coupon-section" id="coupon">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <div class="row">
              <div class="col-lg-12 offset-lg-0">
                <div class="row">
                    <div class="col-lg-6 offset-lg-0">
                        <h2 class="section__title-b section__title--margin-b">Dziękujemy za skorzystanie z kodu!</h2>
                        <p class="coupon-name__choose"><span class="bold">Wybrana oferta: </span> -20% na obuwie sportowe w sklepach Nike</p>
                        <div class="facebook-buttons">
                            <div class="facebook-share">Udostępnij</div>
                            <div class="facebook-like">Lubię to!</div>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-0 centered">
                        <div class="coupon-code__container">
                            <div class="form__inputs">
                                <input type="text" class="input__copy" placeholder="TWÓJ KOD" required>
                                <div  class="copy-button" type="submit">Skopiuj</div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--end coupon-->
    <?php
      include('modules/all-offers.php');
    ?>
    <!--section similar code-->
    <?php
      include('modules/similar-codes.php');
    ?>
    <!--end section similar coupon-->
  </main>