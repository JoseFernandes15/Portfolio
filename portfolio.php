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
          <?php echo $translator->gettext("projetos"); ?></span>
          </h2>
        </div>
        <div class="center-everything" style="margin-top:-30px">
          <div class="img-box no_select">
            <img src="images/OIG4.webp" alt="Em contrução" class="img-working">
          </div>
          <p>
          <?php echo $translator->gettext("project_p1"); ?>
            <br> 
            <?php echo $translator->gettext("project_p2"); ?>        
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