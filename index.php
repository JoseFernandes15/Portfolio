<?php include('head.php'); ?>

<body>
    <!-- Landing page  -->
    <div class="hero_area">
        <div class="hero_bg_box">
            <div class="bg_img_box">
                <img src="images/hero-bg.webp" type="image/webp" alt="">
            </div>
        </div>
        <?php include('components/navbar.php'); ?>
        <!-- Secção inicial  -->
        <section class="slider_section ">
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active ">
                        <div class="container ">
                            <div class="row ">
                                <div class="col-md-12 col-lg-6 ">
                                    <div class="detail-box">
                                        <h1 class="d-none-md">
                                            José Pedro Fernandes
                                        </h1>
                                         <!-- Secção para dispositivos moveis  -->
                                        <div class="row d-none-sm d-none-lg negative-margin">
                                            <div class="col-sm-8">
                                                <h1>
                                                    José Pedro Fernandes
                                                </h1>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 d-none-sm d-none-lg">
                                                <div class="img-box no_select slider-md">
                                                    <img src="images/slider-img.webp" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <p class="efeito_letras" id="">
                                            <?php echo $translator->gettext("sobre"); ?>
                                        </p>
                                        <div class="btn-box no_select">
                                            <a href="#" onclick="scrollToSection('competencias')" class="btn1" disabled>
                                                <?php echo $translator->gettext("btn_sobre"); ?>
                                            </a>
                                            <img src="images/Gmail-icon.webp" class="d-none-sm" alt="gmail" width="85px"
                                                height="50px"
                                                style="float: right;cursor: pointer;margin-left:90px;user-select: none;"
                                                onclick="email()">
                                            <img src="images/linkdin-icon.webp" alt="Linkdin Link" class="d-none-sm"
                                                width="96px" height="50px"
                                                style="float: right;cursor: pointer;margin-left:20px;user-select: none;"
                                                onclick="linkdin()">
                                        </div>
                                    </div>
                                </div>
                                 <!-- Imagem da pagina inicial para pc -->
                                <div class="col-md-6 d-none-sm d-none-md">
                                    <div class="img-box no_select">
                                        <img src="images/slider-img.webp" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Secção competencias -->
    <section class="service_section layout_padding" id="competencias">
        <div class="service_container">
            <div class="container ">
                <div class="heading_container heading_center">
                    <h2 class="no_select">
                        <?php echo $translator->gettext("competencias"); ?></span>
                    </h2>
                    <p>
                        <?php echo $translator->gettext("competencias_texto"); ?>
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-4 ">
                        <div class="box ">
                            <div class="img-box no_select">
                                <img src="images/database.webp" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    <?php echo $translator->gettext("bd"); ?>
                                </h5>
                                <p>
                                    <?php echo $translator->gettext("db_text"); ?>
                                </p>
                                <br>
                                <a href="skills.php" class="no_select">
                                    <?php echo $translator->gettext("btn_saber_mais"); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="box ">
                            <div class="img-box no_select">
                                <img src="images/local-na-rede-internet.webp" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    <?php echo $translator->gettext("front"); ?>
                                </h5>
                                <p>
                                    <?php echo $translator->gettext("front_text"); ?>
                                </p>
                                <a href="skills.php" class="no_select">
                                    <?php echo $translator->gettext("btn_saber_mais"); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="box">
                            <div class="img-box no_select">
                                <img src="images/desenvolvedor-de-software.webp" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    <?php echo $translator->gettext("back"); ?>
                                </h5>
                                <p>
                                    <?php echo $translator->gettext("back_text"); ?>

                                </p>
                                <a href="skills.php" class="no_select">
                                    <?php echo $translator->gettext("btn_saber_mais"); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-box">
                    <a href="skills.php" style="border-radius:8px" class="no_select">
                        <?php echo $translator->gettext("btn_ver_tudo"); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Secção sobre mim -->
    <section class="about_section layout_padding" id="sobremim">
        <div class="container  ">
            <div class="heading_container heading_center">
                <h2 class="no_select">
                    <?php echo $translator->gettext("sobre_titulo"); ?>
                    <span><?php echo $translator->gettext("mim_titulo"); ?></span>
                </h2>
                <p>
                    <?php echo $translator->gettext("sobremim_h2"); ?>
                </p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="center-everything">
                        <div class="img-box no_select img-slider">
                            <img src="images/OIG3.webp" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 m-margin-md">
                    <div class="detail-box">
                        <p>
                            <?php echo $translator->gettext("sobremim_p1"); ?>
                        </p>
                        <p>
                            <?php echo $translator->gettext("sobremim_p2"); ?>
                        </p>
                        <p>
                            <?php echo $translator->gettext("sobremim_p3"); ?>
                        </p>
                        <p>
                            <?php echo $translator->gettext("sobremim_p4"); ?>
                            <br>
                            <?php echo $translator->gettext("sobremim_p5"); ?>
                            <br>
                            <?php echo $translator->gettext("sobremim_p6"); ?>
                        </p>
                        <p>
                            <?php echo $translator->gettext("sobremim_p7"); ?>
                            <br>
                            <?php echo $translator->gettext("sobremim_p8"); ?>
                            <br>
                            <?php echo $translator->gettext("sobremim_p9"); ?>
                        </p>
                        <p>
                            <?php echo $translator->gettext("sobremim_p10"); ?>
                        </p>
                        <p>
                            <?php echo $translator->gettext("sobremim_p11"); ?>
                            <br>
                            <?php echo $translator->gettext("sobremim_p12"); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
      <!-- Secção projetos -->
    <section class="client_section layout_padding" id="projetos">
        <div class="container">
            <div class="heading_container heading_center psudo_white_primary mb_45">
                <h2>
                    <?php echo $translator->gettext("projetos"); ?>
                </h2>
            </div>
            <!-- 
      <div class="carousel-wrap ">
        <div class="owl-carousel client_owl-carousel">
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                      LusDen
                    </h6>
                    <p>
                      magna aliqua. Ut
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                      Zen Court
                    </h6>
                    <p>
                      magna aliqua. Ut
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                      LusDen
                    </h6>
                    <p>
                      magna aliqua. Ut
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                      Zen Court
                    </h6>
                    <p>
                      magna aliqua. Ut
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    -->
            <div class="center-everything" style="margin-top:-30px">
                <div class="img-box no_select">
                    <img src="images/OIG4.webp" alt="Em contrução" class="img-working">
                </div>
                <p>
                    <?php echo $translator->gettext("projetos_text1"); ?>
                    <br>
                    <?php echo $translator->gettext("projetos_text2"); ?>
                </p>
            </div>

        </div>
    </section>

    <?php include('components/footer.php'); ?>

</body>
</html>