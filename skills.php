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
                  Base de dados
                </h5>
                <p>
                  Consigo desenvoler bases de dados personalizadas com base nos requisitos recolhidos em reuniões com o cliente.                </p>
                <b>
                  Conhecimentos SQL:
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
                 Desenvolvimento Front-End
                </h5>
                <p>
                  Consigo desenvolver a interface do utilizador, em várias linguagens. Podendo escolher a mais indicada para cada projeto.                
                </p>
                    <b>
                      Conhecimentos Front-End
                    </b>
                    <p class="mt-2">
                  HTML <br>
                  CSS<br>
                  JavaScript<br>
                  TypeScript<br>
                  Angular
                </p>
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
                 Desenvolvimento Back-End
                </h5>
                <p>
                  Consigo desenvolver a lógica interna da aplicação em várias linguagens. Podendo escolher a mais indicada para cada projeto.                  
                </p>
                  <b>
                    Conhecimentos Back-End
                  </b>
                  <p class="mt-2">
                  PHP <br>
                  Node.js<br>
                  ExpressJS<br>
                  Jest
                </p>              
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
                  Desenvolvimento
                 </h5>
                 <p>
                  Alguns conhecimentos sem categoria. <br>  Como design de UI, repositórios git e metodologia ágil.
                 <p>
                <b>
                 Conhecimentos Extra
                </b>
                <p class="mt-2">
                  Figma<br>
                  GitHub<br>
                  GitLab<br>
                  Metodologia ágil Scrum 
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