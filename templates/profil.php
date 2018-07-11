<body>
<?php
include('modules/menu.php');
?>
    <section class="section section--padding-tbl " id="all-brands">
        <div class="container-fluid">
    	    <div class="row">
    		    <div class="col-lg-8 offset-lg-2">
                    <div class="row">
                        <div class="col-lg-9 offset-lg-0 order-xl-1 order-12">
                            <h2 class="section__title section__border">Ulubione marki</h2>

                            <?php 
                                include('modules/favorite-brands.php');
                            ?>
                            <?php 
                                include('modules/used-offers.php');
                            ?>



                        </div>

                        <div class="col-lg-3 offset-lg-0 col-md-6 offset-md-3 col-xs-6 col-12 offset-xs-3 offset-0 order-xl-12 order-1">
                            <h2 class="section__title section__title--margin-b section__border">Twój profil</h2>


                            <div class="row user">
                                <div class="col-xl-12 offset-xl-0">
                                    <div class="user__profile">

                                        <div class="user__img">
                                            <img class="profile-img" src="/assets/img/avatar.png" alt="user-img">
                                        </div>
                                      
                                        <p class="user__name bold">Cześć <span class="name">Jakub</span>!</p>
                                    
                                        <div class="user__text">
                                            <p>Wybierz co chcesz zrobić</p>
                                        </div>
                                        <div class="user__buttons">
                                            <div class="user__btn">Edytuj profil</div>
                                            <div class="user__btn">Dodaj kod rabatowy</div>
                                            <div class="user__btn">Przejdź do panelu admina</div>
                                            <div class="user__btn">Usuń konto</div>

                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="row advertisement">
                                <div class="col-xl-12 offset-xl-0">
                                    <div class="advertisement__container">
                                        <div class="advertisement__text">Chcesz dodawać własne kody rabatowe?</div>
                                        <div class="advertisement-btn">Zostań partnerem</div>
                                    </div>
                                </div>
                            </div>






                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section> 
  <!--end offers section-->
    

