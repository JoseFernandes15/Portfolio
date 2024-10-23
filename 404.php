<?php include('head.php'); ?>

<body class="sub_page">
    <div class="hero_area">
    <?php include('components/navbar.php'); ?>
    </div>
    
     <section class="service_section layout_padding">
       <div class="service_container">
         <div class="container center-everything">
          <p style="margin-bottom:-10px" clasS="p404">
          <?php echo $translator->gettext("404"); ?>
          </p>
            <div class="e404">
              404
            </div>
           <div class="btn-box">
             <a href="index.php" style="border-radius:8px" class="no_select">
             <?php echo $translator->gettext("btn_home"); ?>
             </a>
           </div>
         </div>
       </div>
     </section>

<?php include('components/footer.php'); ?>

</body>   
</html>