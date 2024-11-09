<?php include('head.php'); ?>

<body class="sub_page">
  <div class="hero_area">
    <?php include('components/navbar.php'); ?>
  </div>

   <section class="service_section layout_padding2 mb-5" id="contactos">
    <div class="container mb-5">
      <div class="heading_container heading_center psudo_white_primary mb_45 mb-5">
        <h2>
        <?php echo $translator->gettext("responsividade"); ?>
        </h2>
        <p>
        <?php echo $translator->gettext("responsividade_texto"); ?>
        </p>
      </div>
          <div class="row">
            <div class="col-3">
              <div class="telemovel">
                <div class="interior-telemovel">
                  <iframe class="scaled-iframe" src="https://www.josefernandes.pt/" width="100%" height="100%" frameborder="0" scrolling="auto"></iframe>
                </div>
              </div>
            </div>
            <div class="col-1"></div>
            <div class="col-8">
              <div class="tablet">
                <div class="interior-tablet">
                  <iframe src="https://www.josefernandes.pt/" width="100%" height="100%" frameborder="0" scrolling="auto"></iframe>
                </div>
              </div>
            </div>
          </div>
          <div class="btn-box">
            <a href="/" style="border-radius:8px" class="no_select">
            <?php echo $translator->gettext("btn_voltar"); ?>
            </a>
          </div>
    </div>
  </section>

  <?php include('components/footer.php'); ?>

<!-- Aviso caso a pagina não seja redirecionada automaticamente -->
<not-available class="d-none-lg">

  <h1>Not available on mobile devices!</h1>

</not-available>

</body>
</html>