<!DOCTYPE html>
<html>
<?php include('head.php'); ?>
<body class="sub_page">

 <div class="hero_area">
    <?php include('components/navbar.php'); ?>
  </div>

  <section class="service_section layout_padding">
    <div class="service_container">
      <div class="container ">
        <div class="heading_container heading_center">
          <h2 class="no_select">
          <?php echo $translator->gettext("competencias"); ?>
          </h2>
        </div>
        <div class="row">
          <div class="col-md-6 ">
            <div class="box-interactive ">
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
                <b>
                  SQL:
                </b>
                <p class="mt-2">
                  MySql <br>
                  MariaDB <br>
                  PostgreSQL
                </p>
                <br>
                <br>
              </div>
            </div>
          </div>
          <div class="col-md-6 ">
            <div class="box-interactive-front">
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
                <div class="row">
                  <div class="col-2"></div>  
                  <div class="col-4" style="margin-left:-0rem">
                    <b>
                    <?php echo $translator->gettext("linguagens"); ?>
                      </b>
                      <p class="mt-2">
                    HTML <br>
                    CSS<br>
                    JavaScript<br>
                    TypeScript
                  </p>
                  <br>
                    </div>
                  <div class="col-4" style="margin-right:-0rem">
                  <b>
                      Frameworks
                    </b>
                    <p class="mt-2">
                  Angular <br>
                  Laravel(Blade)
                    </p>
                  </div>
                  <div class="col-2"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 ">
            <div class="box-interactive-back">
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
                <div class="row">
                  <div class="col-2"></div>  
                  <div class="col-4" style="margin-left:-0rem">
                    <b>
                    <?php echo $translator->gettext("linguagens"); ?>
                      </b>
                      <p class="mt-2">
                      PHP <br>
                      Javascript
                  </p>
                    </div>
                  <div class="col-4" style="margin-right:-0rem">
                  <b>
                      Frameworks
                    </b>
                    <p class="mt-2">
                      Laravel <br>
                      Node.js<br>
                      ExpressJS<br>
                      Jest
                    </p>
                  </div>
                  <div class="col-2"></div>
                </div>          
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="box-interactive-extra">
              <div class="img-box no_select">
                <img src="images/extra.webp" alt="">
              </div>
              <div class="detail-box">
                <h5>
                <?php echo $translator->gettext("extra"); ?>
                 </h5>
                 <p>
                 <?php echo $translator->gettext("extra_texto_1"); ?> <br>  <?php echo $translator->gettext("extra_texto_2"); ?> 
                 <p>
                <b>
                <?php echo $translator->gettext("extra_h2"); ?> 
                </b>
                <p class="mt-2">
                  Figma<br>
                  GitHub<br>
                  GitLab<br>
                  <?php echo $translator->gettext("agil"); ?> 
                </p>
              </div>
            </div>
          </div>       
        </div>
        <div class="btn-box">
          <a href="index.php" style="border-radius:8px" class="no_select">
          <?php echo $translator->gettext("btn_voltar"); ?>
          </a>
        </div>
      </div>
      </div>
  </section>

  <?php include('components/footer.php'); ?>
  
</body>
</html>