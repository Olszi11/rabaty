<body class="body-registration">
    <main class="main">
        <!--section login offers-->
        <section class="registration" id="registration">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 offset-lg-0">
                        <div class="row">
                            <div class="col-lg-6 toremove">
                                <div class="registration__img-container">
                                    <img class="registration__img" src="/assets/img/bg-login.jpg" alt="image login">
                                </div>
                            </div>
                            <div class="col-lg-6 ">
                                <div class="registration__container">

                                    <div class="registration__logo-container">
                                        <div class="navbar-logo">
                                            <a class="navbar-logo__link" href="/">
                                                <img class="navbar-logo__img" src="/assets/img/logo.svg">
                                            </a>
                                        </div>
                                        <div class="back__link-container">
                                            <a class="back__link" href="/">
                                                <p>Wróć na stronę główną</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="registration__content">
                                        <p class="section__title">Załóż konto</p>
                                        <div class="registration__text">
                                            <p class="registration__desc">Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki.</p>
                                        </div>
                                    

                                        <div class="login-buttons">
                                            <div class="facebook__login">Zaloguj przez Facebook</div>
                                            <div class="google__login">Zaloguj przez Google</div>
                                        </div>

                                        <div class="registration__form-container">
                                            <p class="form__title uppercase">Lub wypełnij formularz</p>
                                            <form class="registration__form" action="ajax.php" method="POST">
                                                

                                                <div class="input-group">
                                                    <span class="input-addon"><i class="far fa-user"></i></span>
                                                    <input class="registration__form-input" type="text" name="name" placeholder="Imię i nazwisko" pattern="[A-Za-z\s]{2,}" title="Imię i nazwisko" required>
                                                </div>

                                                <div class="input-group">
                                                    <span class="input-addon"><i class="fas fa-at"></i></span>
                                                    <input class="registration__form-input" type="email" name="email" placeholder="Adres email" pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" title="Adres email" required>
                                                </div>

                                                

                                                 <div class="input-group">
                                                    <span class="input-addon"><i class="fas fa-lock"></i></span>
                                                    <input class="registration__form-input" type="password" name="password" placeholder="Ustaw hasło" title="Ustaw hasło" required>
                                                </div>
                                                

                                               
                                                <div class="registration__form-rules">
                                                    <p class="rules-text">
                                                        Rejestrując się, zgadzasz się jednocześnie z <a class="" href="regulamin.pdf" target="_blank"><span class="bold">Regulaminem</span></a>,<a href="polityka_prywatnosci.pdf" target="_blank"><span class="bold"> Polityką prywatności</span></a>, oraz wyrażasz zgodę na przetwarzanie danych zawartą <a href="regulamin.pdf" target="_blank"><span class="bold">tutaj</span></a>.
                                                    </p>
                                                </div>

                                                <input class="registration__form-submit" type="submit" value="Utwórz konto"> 

                                            </form>
                                            <div class="response-message"></div>
                                            <div class="text-login">Masz już konto? <a href="/logowanie"><span class="bold log-in">Zaloguj się</span></a></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
     </main>
            
               